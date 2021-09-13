
package tcp;


import classes.Mensagem;
import classes.TiposMensagens;
import java.awt.Color;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;
import java.net.Socket;
import javax.swing.JTextArea;


public class Client extends Thread{
   private final int PORTA = 5000;
   private String URL = "127.0.0.1";
   private ObjectInputStream fluxoEntrada;
   private ObjectOutputStream fluxoSaida;
   
   
   private final JTextArea textArea;
   
   public Client(JTextArea textArea){
       this.textArea = textArea;
   }
   
   
   public void enviar(Mensagem msg){
       try {
           fluxoSaida.writeObject(msg);
           fluxoSaida.flush();
       } catch (Exception e) {
           System.out.println("Erro: " + e.getMessage());
       }
   }
   


    public void atualizarInterface(Mensagem msg) {
        textArea.append(msg.getCorpoMensagem() + "\n");
    }
    
    @Override
    public void run(){
        try {
            Socket conn = new Socket(URL, PORTA);
            atualizarInterface(new Mensagem(TiposMensagens.CONEXAO, "Conectado no Servidor da Porta: " + PORTA));
            fluxoSaida = new ObjectOutputStream(conn.getOutputStream());
            fluxoEntrada = new ObjectInputStream(conn.getInputStream());
            
            Mensagem msg;
            do{
                msg = (Mensagem)fluxoEntrada.readObject();
                atualizarInterface(new Mensagem(TiposMensagens.ENVIOTEXTO, "\nMensagem : " + msg.getCorpoMensagem()));
            }while(msg.getTipo() != TiposMensagens.ENCERRAMENTO);
            fluxoEntrada.close();
            fluxoSaida.close();
            conn.close();
            
        } catch (Exception e) {
            System.out.println("Erro: " + e.getMessage());
        }
        
    }
    
    
}
