
package classes;

import java.io.Serializable;


public class Mensagem implements Serializable{
    private TiposMensagens tipo;
    private String corpoMensagem;

    public Mensagem() {
    }

    public Mensagem(TiposMensagens tipo, String corpoMensagem) {
        this.tipo = tipo;
        this.corpoMensagem = corpoMensagem;
    }

    public TiposMensagens getTipo() {
        return tipo;
    }

    public void setTipo(TiposMensagens tipo) {
        this.tipo = tipo;
    }

    public String getCorpoMensagem() {
        return corpoMensagem;
    }

    public void setCorpoMensagem(String corpoMensagem) {
        this.corpoMensagem = corpoMensagem;
    }

    @Override
    public String toString() {
        return "Mensagem{" + "tipo=" + tipo + ", corpoMensagem=" + corpoMensagem + '}';
    }

    
    
    
}
