import javax.swing.JOptionPane;

public class Exercicío2 {
	public static void main(String[] args) {
		String destino;
		int dias, valor;

		destino = JOptionPane.showInputDialog(null, "Informe o seu destino: ", "Destino", JOptionPane.PLAIN_MESSAGE); // Digitando o destino
		do {
			dias = Integer.parseInt(JOptionPane.showInputDialog(null, "Informe a quantidade de dias: ", "Dias",
					JOptionPane.PLAIN_MESSAGE)); // Digitando a quantidade de dias
			if (dias < 2) {
				JOptionPane.showMessageDialog(null, "A quantidade de dias não pode ser inferior a 2.", "Erro",
						JOptionPane.ERROR_MESSAGE); // Caso os dias sejam menor que 2,digitar novamente
			}
		} while (dias < 2);

		if (destino.equalsIgnoreCase("Ilhabela")) { // Calculando o valor a ser pago
		} else if (dias >= 2 && dias <= 5) {
			valor = 240 * dias;
			JOptionPane.showMessageDialog(null, " O valor a ser pago é: R$" + valor+",00", "Preço",JOptionPane.INFORMATION_MESSAGE);

		} else if (dias >= 6 && dias <= 10) {
			valor = 220 * dias + 130;
			JOptionPane.showMessageDialog(null, " O valor a ser pago é: R$" + valor+",00", "Preço",JOptionPane.INFORMATION_MESSAGE);
		} else if (dias > 10) {
			valor = 210 * dias + 150;
			JOptionPane.showMessageDialog(null, " O valor a ser pago é: R$" + valor+",00", "Preço",JOptionPane.INFORMATION_MESSAGE);
		}

		if (destino.equalsIgnoreCase("Fernando de Noronha")) {
		} else if (dias >= 2 && dias <= 5) {
			valor = 400 * dias + 100;
			JOptionPane.showMessageDialog(null, " O valor a ser pago é: R$" + valor+",00", "Preço",JOptionPane.INFORMATION_MESSAGE);
		} else if (dias >= 6 && dias <= 10) {
			valor = 410 * dias + 150;
			JOptionPane.showMessageDialog(null, " O valor a ser pago é: R$" + valor+",00", "Preço",JOptionPane.INFORMATION_MESSAGE);
		} else if (dias > 10) {
			valor = 420 * dias + 150;
			JOptionPane.showMessageDialog(null, " O valor a ser pago é: R$" + valor+",00", "Preço",JOptionPane.INFORMATION_MESSAGE);
		} else {
			JOptionPane.showMessageDialog(null, "O destino selecionado é inválido.", "Erro", JOptionPane.ERROR_MESSAGE);
		}
	}
}