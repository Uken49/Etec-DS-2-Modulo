import javax.swing.JOptionPane;

public class Exercic�o3 {
	public static void main(String[] args) {
		// declara��o de variaveis//
		double maiorSalario = 0,menorSalario = 9999999
				,salarioMedio,valorSalarioFinal, salario;
		int i,maiorMes=0,menorMes=0;
		valorSalarioFinal = 0;
		salario = 0;

		//Digitando os sal�rios
		for (i = 1; i <= 12; i++) {
			salario = Double.parseDouble(JOptionPane.showInputDialog(null, "Digite o " + i + " sal�rio:"));
			
			//Calculando o maior sal�rio
			if (salario > maiorSalario) {
				maiorSalario = salario;
				maiorMes = i;
			}
			//Calculando o menor sal�rio
			if (salario < menorSalario) {
				menorSalario = salario;
				menorMes=i;
			}
			//Somando os sal�rios de cada m�s
			valorSalarioFinal += salario;
		}
		
		//Calculando a m�dia
		salarioMedio = valorSalarioFinal / 12;

		//Exibindo sa�da
		JOptionPane.showMessageDialog(null, String.format("A soma dos salarios �: %.2fR$" , valorSalarioFinal));
		JOptionPane.showMessageDialog(null, String.format("O valor m�dio dos salarios �: %.2fR$" , salarioMedio));
		JOptionPane.showMessageDialog(null, String.format("O maior salario foi: %.2fR$" , maiorSalario)+"\nE foi no m�s: "+maiorMes);
		JOptionPane.showMessageDialog(null, String.format("O menor salario foi: %.2fR$" , menorSalario)+"\nE foi no m�s: "+menorMes);
		
	}
}