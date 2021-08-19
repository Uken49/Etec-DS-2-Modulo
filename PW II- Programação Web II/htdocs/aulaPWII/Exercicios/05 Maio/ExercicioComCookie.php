<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Casas Luiza - Página Inicial</title>
    </head>

    <body>
        <div style="margin-bottom: 3%;">
            <table border="1" width="100%" heigth="100" cellpadding="10" bgcolor="#C0C0C0">
                <tbody>
                    <td>
                        <form name="formCategoria" method="POST" action="slcCategoria.php">
                            <b style="font-size: 20px;">Categoria:</b>
                            <select name="slcCategoria">
                                <option value="1"> Vestimentas </option>
                                <option value="2"> Tecnologia </option>
                                <option value="3"> Livros </option>
                                <option value="4"> Eletrodoméstico </option>
                            </select> <br>
                            <input type="submit" value="Pesquisar">
                        </form>
                    </td>
                </tbody>
            </table>
        </div>
        <?php
            if (isset($_COOKIE['categoriaCookie'])) {
                $categoria = $_COOKIE['categoriaCookie'];
                switch ($categoria) {
                    case 1: //Select 1 - Vestimentas
                        echo ('
                            <div align="center">
                                <table border="1">
                                    <tbody align="center">
                                        <tr> 
                                            <td><img src="../05 Maio/imagens/1-Jaqueta College Moletom Masculina Com Capuz.png" alt="image" align="center" height="200" weight="200">
                                            <br>Jaqueta College Moletom<br>
                                                Masculina Com Capuz R$139,90</td>

                                            <td><img src="../05 Maio/imagens/1-Calça Jeans Feminina Azul Cós Alto.png" alt="image" align="center" height="200" weight="200">
                                            <br>Calça Jeans Feminina<br>
                                                Azul Cós Alto R$298,54</td>
                                                
                                            <td><img src="../05 Maio/imagens/1-Chinelo Corinthians Infantil.png" alt="" align="center" height="200" weight="200"">
                                            <br>Chinelo Corinthians Infantil<br>
                                                Edição Mundial de 2012 R$29,80</td>
                                        </tr>
                                        <tr>
                                            <td><img src="../05 Maio/imagens/3-Dungeons And Dragons - Dungeon Master S Guide.png" alt="image" align="center" height="200" weight="200">
                                            <br>Dungeons And Dragons<br>
                                                Dungeon Master S Guide R$151,92</td>
                                            
                                            <td><img src="../05 Maio/imagens/3-Livro - O Andar Do Bêbado.png" alt="image" align="center" height="200" weight="200"">
                                            <br>Livro - O Andar Do Bêbado<br>
                                                R$31,90</td>
                                                    
                                            <td><img src="../05 Maio/imagens/3-O Senhor Dos Anéis A Sociedade do Anel.png" alt="image" align="center" height="200" weight="200"">
                                            <br>O Senhor Dos Anéis:<br>
                                                A Sociedade do Anel R$53,80</td>
                                        </tr>
                                        <tr>
                                            <td><img src="../05 Maio/imagens/4-Refrigerador-Brastemp-Inverse.png" alt="" align="center" height="200" weight="200"">
                                            <br>Refrigerador Brastemp<br>
                                                Inverse R$3999,00</td>
                                            
                                            <td><img src="../05 Maio/imagens/4-Lavadora-Brastemp.png" alt="image" align="center" height="200" weight="200">
                                            <br>Lavadora Brastemp R$1749,00</td>
                                            
                                            <td><img src="../05 Maio/imagens/4-Batedeira Britânia Pérola.png" alt="image" align="center" height="200" weight="200">
                                            <br>Batedeira Britânia Pérola<br>
                                                R$119,90</td>
                                        </tr>
                                        <tr>
                                            <td><img src="../05 Maio/imagens/2-Console Xbox Series X 1TB.png" alt="image" align="center" height="200" weight="200">
                                            <br>Console Xbox Series X 1TB<br>
                                                R$7690,00</td>

                                            <td><img src="../05 Maio/imagens/2-Impressora Epson EcoTank L3110.png" alt="image" align="center" height="200" weight="200">
                                            <br>Impressora Epson EcoTank<br>
                                                L3110 R$929,00</td>
                                                
                                            <td><img src="../05 Maio/imagens/2-Iphone 12 64GB.png" alt="image" align="center" height="200" weight="200">
                                            <br>Iphone 12 64GB R$7999,00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>'
                        );
                        break;

                    case '2'://Select 2 - Tecnologia
                        echo ('
                            <div align="center">
                                <table border="1">
                                    <tbody align="center">
                                        <tr>
                                            <td><img src="../05 Maio/imagens/2-Console Xbox Series X 1TB.png" alt="image" align="center" height="200" weight="200">
                                            <br>Console Xbox Series X 1TB<br>
                                                R$7690,00</td>

                                            <td><img src="../05 Maio/imagens/2-Impressora Epson EcoTank L3110.png" alt="image" align="center" height="200" weight="200">
                                            <br>Impressora Epson EcoTank<br>
                                                L3110 R$929,00</td>
                                                
                                            <td><img src="../05 Maio/imagens/2-Iphone 12 64GB.png" alt="image" align="center" height="200" weight="200">
                                                <br>Iphone 12 64GB R$7999,00</td>
                                        </tr>
                                        <tr>
                                            <td><img src="../05 Maio/imagens/3-Dungeons And Dragons - Dungeon Master S Guide.png" alt="image" align="center" height="200" weight="200">
                                            <br>Dungeons And Dragons<br>
                                                Dungeon Master S Guide R$151,92</td>
                                            
                                            <td><img src="../05 Maio/imagens/3-Livro - O Andar Do Bêbado.png" alt="image" align="center" height="200" weight="200"">
                                            <br>Livro - O Andar Do Bêbado<br>
                                                R$31,90</td>
                                            
                                            <td><img src="../05 Maio/imagens/3-O Senhor Dos Anéis A Sociedade do Anel.png" alt="image" align="center" height="200" weight="200"">
                                            <br>O Senhor Dos Anéis:<br>
                                                A Sociedade do Anel R$53,80</td>
                                        </tr>
                                        <tr>
                                            <td><img src="../05 Maio/imagens/4-Refrigerador-Brastemp-Inverse.png" alt="" align="center" height="200" weight="200"">
                                            <br>Refrigerador Brastemp<br>
                                                Inverse R$3999,00</td>
                                                
                                            <td><img src="../05 Maio/imagens/4-Lavadora-Brastemp.png" alt="image" align="center" height="200" weight="200">
                                            <br>Lavadora Brastemp R$1749,00</td>

                                            <td><img src="../05 Maio/imagens/4-Batedeira Britânia Pérola.png" alt="image" align="center" height="200" weight="200">
                                            <br>Batedeira Britânia Pérola<br>
                                                R$119,90</td>
                                        </tr>
                                        <tr> 
                                            <td><img src="../05 Maio/imagens/1-Jaqueta College Moletom Masculina Com Capuz.png" alt="image" align="center" height="200" weight="200">
                                            <br>Jaqueta College Moletom<br>
                                                Masculina Com Capuz R$139,90</td>
                
                                            <td><img src="../05 Maio/imagens/1-Calça Jeans Feminina Azul Cós Alto.png" alt="image" align="center" height="200" weight="200">
                                            <br>Calça Jeans Feminina<br>
                                                Azul Cós Alto R$298,54</td>
                                                
                                            <td><img src="../05 Maio/imagens/1-Chinelo Corinthians Infantil.png" alt="" align="center" height="200" weight="200"">
                                            <br>Chinelo Corinthians Infantil<br>
                                                Edição Mundial de 2012 R$29,80</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>'
                        );
                        break;
                        
                    case 3: //Select 3 - Livros
                        echo ('
                            <div align="center">
                                <table border="1">
                                    <tbody align="center">
                                        <tr>
                                            <td><img src="../05 Maio/imagens/3-Dungeons And Dragons - Dungeon Master S Guide.png" alt="image" align="center" height="200" weight="200">
                                            <br>Dungeons And Dragons<br>
                                                Dungeon Master S Guide R$151,92</td>

                                            <td><img src="../05 Maio/imagens/3-Livro - O Andar Do Bêbado.png" alt="image" align="center" height="200" weight="200"">
                                            <br>Livro - O Andar Do Bêbado<br>
                                                R$31,90</td>
                                                
                                            <td><img src="../05 Maio/imagens/3-O Senhor Dos Anéis A Sociedade do Anel.png" alt="image" align="center" height="200" weight="200"">
                                            <br>O Senhor Dos Anéis:<br>
                                                A Sociedade do Anel R$53,80</td>
                                        </tr>
                                        <tr>
                                            <td><img src="../05 Maio/imagens/2-Console Xbox Series X 1TB.png" alt="image" align="center" height="200" weight="200">
                                            <br>Console Xbox Series X 1TB<br>
                                                R$7690,00</td>

                                            <td><img src="../05 Maio/imagens/2-Impressora Epson EcoTank L3110.png" alt="image" align="center" height="200" weight="200">
                                            <br>Impressora Epson EcoTank<br>
                                                L3110 R$929,00</td>
                                                
                                            <td><img src="../05 Maio/imagens/2-Iphone 12 64GB.png" alt="image" align="center" height="200" weight="200">
                                            <br>Iphone 12 64GB R$7999,00</td>
                                        </tr>
                                        <tr> 
                                            <td><img src="../05 Maio/imagens/1-Jaqueta College Moletom Masculina Com Capuz.png" alt="image" align="center" height="200" weight="200">
                                            <br>Jaqueta College Moletom<br>
                                                Masculina Com Capuz R$139,90</td>

                                            <td><img src="../05 Maio/imagens/1-Calça Jeans Feminina Azul Cós Alto.png" alt="image" align="center" height="200" weight="200">
                                            <br>Calça Jeans Feminina<br>
                                                Azul Cós Alto R$298,54</td>
                                                
                                            <td><img src="../05 Maio/imagens/1-Chinelo Corinthians Infantil.png" alt="" align="center" height="200" weight="200"">
                                            <br>Chinelo Corinthians Infantil<br>
                                                Edição Mundial de 2012 R$29,80</td>
                                        </tr>
                                        <tr>
                                            <td><img src="../05 Maio/imagens/4-Refrigerador-Brastemp-Inverse.png" alt="" align="center" height="200" weight="200"">
                                            <br>Refrigerador Brastemp<br>
                                                Inverse R$3999,00</td>
                                                
                                            <td><img src="../05 Maio/imagens/4-Lavadora-Brastemp.png" alt="image" align="center" height="200" weight="200">
                                            <br>Lavadora Brastemp R$1749,00</td>

                                            <td><img src="../05 Maio/imagens/4-Batedeira Britânia Pérola.png" alt="image" align="center" height="200" weight="200">
                                            <br>Batedeira Britânia Pérola<br>
                                                R$119,90</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>'
                        );
                        break;

                    case 4: //Select 4 - Eletrodomesticos
                        echo ('
                            <div align="center">
                                <table border="1">
                                    <tbody align="center">
                                        <tr>
                                            <td><img src="../05 Maio/imagens/4-Refrigerador-Brastemp-Inverse.png" alt="" align="center" height="200" weight="200"">
                                            <br>Refrigerador Brastemp<br>
                                                Inverse R$3999,00</td>
                                                
                                            <td><img src="../05 Maio/imagens/4-Lavadora-Brastemp.png" alt="image" align="center" height="200" weight="200">
                                            <br>Lavadora Brastemp R$1749,00</td>
                    
                                            <td><img src="../05 Maio/imagens/4-Batedeira Britânia Pérola.png" alt="image" align="center" height="200" weight="200">
                                            <br>Batedeira Britânia Pérola<br>
                                                R$119,90</td>
                                        </tr>
                                        <tr> 
                                            <td><img src="../05 Maio/imagens/1-Jaqueta College Moletom Masculina Com Capuz.png" alt="image" align="center" height="200" weight="200">
                                            <br>Jaqueta College Moletom<br>
                                                Masculina Com Capuz R$139,90</td>
                    
                                            <td><img src="../05 Maio/imagens/1-Calça Jeans Feminina Azul Cós Alto.png" alt="image" align="center" height="200" weight="200">
                                            <br>Calça Jeans Feminina<br>
                                                Azul Cós Alto R$298,54</td>
                                                
                                            <td><img src="../05 Maio/imagens/1-Chinelo Corinthians Infantil.png" alt="" align="center" height="200" weight="200"">
                                            <br>Chinelo Corinthians Infantil<br>
                                                Edição Mundial de 2012 R$29,80</td>
                                        </tr>
                                        <tr>
                                            <td><img src="../05 Maio/imagens/2-Console Xbox Series X 1TB.png" alt="image" align="center" height="200" weight="200">
                                            <br>Console Xbox Series X 1TB<br>
                                                R$7690,00</td>

                                            <td><img src="../05 Maio/imagens/2-Impressora Epson EcoTank L3110.png" alt="image" align="center" height="200" weight="200">
                                            <br>Impressora Epson EcoTank<br>
                                                L3110 R$929,00</td>
                                                
                                            <td><img src="../05 Maio/imagens/2-Iphone 12 64GB.png" alt="image" align="center" height="200" weight="200">
                                            <br>Iphone 12 64GB R$7999,00</td>
                                        </tr>
                                        <tr>
                                            <td><img src="../05 Maio/imagens/3-Dungeons And Dragons - Dungeon Master S Guide.png" alt="image" align="center" height="200" weight="200">
                                            <br>Dungeons And Dragons<br>
                                                Dungeon Master S Guide R$151,92</td>
                    
                                            <td><img src="../05 Maio/imagens/3-Livro - O Andar Do Bêbado.png" alt="image" align="center" height="200" weight="200"">
                                            <br>Livro - O Andar Do Bêbado<br>
                                                R$31,90</td>
                                                
                                            <td><img src="../05 Maio/imagens/3-O Senhor Dos Anéis A Sociedade do Anel.png" alt="image" align="center" height="200" weight="200"">
                                            <br>O Senhor Dos Anéis:<br>
                                                A Sociedade do Anel R$53,80</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>'
                        );
                        break;
                }
            } else { //Caso não tenha Cookies
                echo ('
                    <div align="center">
                        <table border="1">
                            <tbody align="center">
                                <tr> 
                                    <td><img src="../05 Maio/imagens/1-Jaqueta College Moletom Masculina Com Capuz.png" alt="image" align="center" height="200" weight="200">
                                    <br>Jaqueta College Moletom<br>
                                        Masculina Com Capuz R$139,90</td>

                                    <td><img src="../05 Maio/imagens/4-Batedeira Britânia Pérola.png" alt="image" align="center" height="200" weight="200">
                                    <br>Batedeira Britânia Pérola<br>
                                        R$119,90</td>

                                    <td><img src="../05 Maio/imagens/2-Impressora Epson EcoTank L3110.png" alt="image" align="center" height="200" weight="200">
                                    <br>Impressora Epson EcoTank<br>
                                        L3110 R$929,00</td>
                                </tr>
                                <tr>
                                    <td><img src="../05 Maio/imagens/2-Console Xbox Series X 1TB.png" alt="image" align="center" height="200" weight="200">
                                    <br>Console Xbox Series X 1TB<br>
                                        R$7690,00</td>
                                    
                                    <td><img src="../05 Maio/imagens/1-Calça Jeans Feminina Azul Cós Alto.png" alt="image" align="center" height="200" weight="200">
                                    <br>Calça Jeans Feminina<br>
                                        Azul Cós Alto R$298,54</td>
                                        
                                    <td><img src="../05 Maio/imagens/2-Iphone 12 64GB.png" alt="image" align="center" height="200" weight="200">
                                    <br>Iphone 12 64GB R$7999,00</td>
                                <tr>
                                    <td><img src="../05 Maio/imagens/3-Dungeons And Dragons - Dungeon Master S Guide.png" alt="image" align="center" height="200" weight="200">
                                    <br>Dungeons And Dragons<br>
                                        Dungeon Master S Guide R$151,92</td>

                                    <td><img src="../05 Maio/imagens/1-Chinelo Corinthians Infantil.png" alt="" align="center" height="200" weight="200"">
                                    <br>Chinelo Corinthians Infantil<br>
                                        Edição Mundial de 2012 R$29,80</td>

                                    <td><img src="../05 Maio/imagens/3-O Senhor Dos Anéis A Sociedade do Anel.png" alt="image" align="center" height="200" weight="200"">
                                    <br>O Senhor Dos Anéis:<br>
                                        A Sociedade do Anel R$53,80</td>
                                </tr>
                                <tr>
                                    <td><img src="../05 Maio/imagens/3-Livro - O Andar Do Bêbado.png" alt="image" align="center" height="200" weight="200"">
                                    <br>Livro - O Andar Do Bêbado<br>
                                        R$31,90</td>

                                    <td><img src="../05 Maio/imagens/4-Refrigerador-Brastemp-Inverse.png" alt="" align="center" height="200" weight="200"">
                                    <br>Refrigerador Brastemp<br>
                                        Inverse R$3999,00</td>
                                        
                                    <td><img src="../05 Maio/imagens/4-Lavadora-Brastemp.png" alt="image" align="center" height="200" weight="200">
                                    <br>Lavadora Brastemp R$1749,00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>'
                );
            }
        ?><br>
        <table bgcolor="#6c757d" width="100%" heigth="100" cellpadding="10" style="margin-top: 10px; font-size: 20px;">
            <tbody>
                <td>
                    Número para contato: (11) 995X-XXXX
                    <p style="color: #C0C0C0;">
                        &copy; Todos os direitos reservados - 2021.
                    </p>
                </td>
            </tbody>
        </table>
    </body>

</html>