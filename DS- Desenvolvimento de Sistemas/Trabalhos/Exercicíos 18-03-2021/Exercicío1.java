import javax.swing.JOptionPane;

public class Exercicío1 {
	public static void main(String[] args) {
		
		double produto,desconto,precoFinal;
		
		produto = Double.parseDouble( JOptionPane.showInputDialog(null,"Digite o preço do produto","Produto",JOptionPane.PLAIN_MESSAGE));
		desconto = Double.parseDouble( JOptionPane.showInputDialog(null,"Digite o valor do desconto em porcentagem","Desconto",JOptionPane.PLAIN_MESSAGE));
		precoFinal=produto-(desconto/100)*produto;
		if (precoFinal <=0) {
			JOptionPane.showMessageDialog(null,("Valor a pagar: 0,00R$"));
		}else {
			JOptionPane.showMessageDialog(null,(String.format("Valor a pagar: %.2fR$",precoFinal)));
		}
		
	}
}
