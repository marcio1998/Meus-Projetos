package tcp;

import classes.Mensagem;
import classes.TiposMensagens;
import java.awt.Color;
import java.io.IOException;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;
import java.net.ServerSocket;
import java.net.Socket;
import javax.swing.JTextArea;

public class Server extends Thread {

    //Definir porta de comunicação
    private final int PORTA = 5000;

    //Definir as Streams para fluxo de comunicação.
    private ObjectInputStream fluxoEntrada;
    private ObjectOutputStream fluxoSaida;

    //Definir o TextArea que faz parte da nossa interface para anexo das mensagens trocadas entre server e client
    private final JTextArea textArea;

    //construtor para receber o textArea e fazer anexo de mensagens.
    public Server(JTextArea textArea) {
        this.textArea = textArea;
    }

    //criar uma finção para o envio de mensagens.
    public void enviar(Mensagem msg) {
        try {
            //faz o envio do objeto da classe mensagem.
            fluxoSaida.writeObject(msg);
            fluxoSaida.flush();
        } catch (IOException e) {
            System.out.println("Erro: " + e.getMessage());
        }
    }

   

    public void atualizarInterface(Mensagem msg) {

        textArea.append(msg.getCorpoMensagem() + "\n");
    }

    @Override
    public void run() {
        try {
            //Inicilizar o servidor socket stream.
            ServerSocket server = new ServerSocket(PORTA);
            atualizarInterface(new Mensagem(TiposMensagens.CONEXAO, "Servidor Iniciado Na Porta: " + PORTA));
            //criar um loop infinito de conexão.
            while (true) {
                atualizarInterface(new Mensagem(TiposMensagens.CONEXAO, "Agurdando Conexão..."));
                //aguardar a conexão de um cliente.
                Socket conn = server.accept();
                atualizarInterface(new Mensagem(TiposMensagens.NOVACONEXAO, "Conexão de: " + conn.getInetAddress().getHostName()));

                //instanciar os fluxos de comunicação.
                fluxoSaida = new ObjectOutputStream(conn.getOutputStream());
                fluxoEntrada = new ObjectInputStream(conn.getInputStream());

                enviar(new Mensagem(TiposMensagens.CONEXAO, "Conexão Estabelecida com Sucesso"));

                //processar as mensagens.
                Mensagem msg;
                TiposMensagens tipo = null;
                do {
                    msg = (Mensagem) fluxoEntrada.readObject();
                    atualizarInterface(new Mensagem(TiposMensagens.ENVIOTEXTO, "\nMensagem : " + msg.getCorpoMensagem()));
                } while (msg.getTipo() != TiposMensagens.ENCERRAMENTO);
                //Encerrar as conexões.
                fluxoEntrada.close();
                fluxoSaida.close();
                conn.close();
            }
        } catch (Exception e) {
            System.out.println("Erro: " + e.getMessage());

        }

    }

}
