import javax.swing.JOptionPane;

public class Exercicío3 {
	public static void main(String[] args) {
		// declaração de variaveis//
		double maiorSalario = 0,menorSalario = 9999999
				,salarioMedio,valorSalarioFinal, salario;
		int i,maiorMes=0,menorMes=0;
		valorSalarioFinal = 0;
		salario = 0;

		//Digitando os salários
		for (i = 1; i <= 12; i++) {
			salario = Double.parseDouble(JOptionPane.showInputDialog(null, "Digite o " + i + " salário:"));
			
			//Calculando o maior salário
			if (salario > maiorSalario) {
				maiorSalario = salario;
				maiorMes = i;
			}
			//Calculando o menor salário
			if (salario < menorSalario) {
				menorSalario = salario;
				menorMes=i;
			}
			//Somando os salários de cada mês
			valorSalarioFinal += salario;
		}
		
		//Calculando a média
		salarioMedio = valorSalarioFinal / 12;

		//Exibindo saída
		JOptionPane.showMessageDialog(null, String.format("A soma dos salarios é: %.2fR$" , valorSalarioFinal));
		JOptionPane.showMessageDialog(null, String.format("O valor médio dos salarios é: %.2fR$" , salarioMedio));
		JOptionPane.showMessageDialog(null, String.format("O maior salario foi: %.2fR$" , maiorSalario)+"\nE foi no mês: "+maiorMes);
		JOptionPane.showMessageDialog(null, String.format("O menor salario foi: %.2fR$" , menorSalario)+"\nE foi no mês: "+menorMes);
		
	}
}