package classes;

public enum TiposMensagens {
    CONEXAO(1),
    ENVIOTEXTO(2),
    ENCERRAMENTO(3),
    ERRO(4),
    NOVACONEXAO(5);
    private int valor; 
    TiposMensagens(int valor){
        this.valor = valor;
    }
    public int getValor(){
        return this.valor;
    }

}
