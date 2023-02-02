CREATE TABLE `entrada_estoque` (
  `cnpj_cod_cnpj` varchar(11) CHARACTER SET utf8 NOT NULL,
  `unidade` int(50) NOT NULL,
  `data` varchar(10) COLLATE utf8_bin NOT NULL,
  `codprod_cod_codprod` int(11) NOT NULL,
  `produto` varchar(255) CHARACTER SET utf8 NOT NULL,
  `quant_atual` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valor_unitario` varchar(50) COLLATE utf8_bin NOT NULL,
  `valor_total` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `entrada_estoque`
--

INSERT INTO `entrada_estoque` (`cnpj_cod_cnpj`, `unidade`, `data`, `codprod_cod_codprod`, `produto`, `quant_atual`, `quantidade`, `valor_unitario`, `valor_total`) VALUES
('22222222222', 1, '03/12/2019', 4, 'Papel', 100, 100, '20.00', '2000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `cnpj` varchar(11) COLLATE utf8_bin NOT NULL,
  `razao` varchar(255) COLLATE utf8_bin NOT NULL,
  `fantasia` varchar(255) COLLATE utf8_bin NOT NULL,
  `estado` varchar(255) COLLATE utf8_bin NOT NULL,
  `cidade` varchar(255) COLLATE utf8_bin NOT NULL,
  `endereco` varchar(255) COLLATE utf8_bin NOT NULL,
  `contato` varchar(11) COLLATE utf8_bin NOT NULL,
  `banco` varchar(255) COLLATE utf8_bin NOT NULL,
  `agencia` varchar(11) COLLATE utf8_bin NOT NULL,
  `conta` varchar(11) COLLATE utf8_bin NOT NULL,
  `datacadastramento` varchar(10) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `site` varchar(255) COLLATE utf8_bin NOT NULL,
  `mensagem` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `fornecedores`
--

INSERT INTO `fornecedores` (`cnpj`, `razao`, `fantasia`, `estado`, `cidade`, `endereco`, `contato`, `banco`, `agencia`, `conta`, `datacadastramento`, `email`, `site`, `mensagem`) VALUES
('11111111111', 'Saturno e Cia', 'Bic e Cia', 'Amazonas', 'Itacoatiara', 'colonia', '1', 'Bradesco', '1', '1', '30/11/2019', 'a@a.com', 'www.a.com.br', 'Teste 9'),
('22222222222', 'Lua e ltda', 'Bic e Cia2', 'Amazonas2', 'Itacoatiara', 'colonia', '11111111111', 'Bradesco', '1111', '111111', '25/11/2019', 'a@a.com', 'www.a.com.br', 'ja chega por hoje!'),
('33333333333', 'Terra e Companhia', 'Planeta das tralhas', 'Amazonas', 'Itacoatiara', 'chibky abrahim', '991994465', 'Caixa', '1222', '1122219', '01/01/2019', 'terra@gmail.com', 'www.terra.com.br', 'Teste 11.'),
('77777777777', 'Marte e Companhia', 'vbbbb', 'bhbhj', 'hbhb', 'hbhb', '777665', 'hghg', '6565', '6565', '05/05/2015', 'hghg', 'hgjhg', 'Teste 4');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `codigo_produto` int(11) NOT NULL,
  `descricao` varchar(255) COLLATE utf8_bin NOT NULL,
  `unidade` int(50) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `total_produto` int(50) NOT NULL,
  `gruproduto` varchar(255) COLLATE utf8_bin NOT NULL,
  `subgrupo` varchar(255) COLLATE utf8_bin NOT NULL,
  `referencia` varchar(255) COLLATE utf8_bin NOT NULL,
  `codigobarra` int(11) NOT NULL,
  `lote` varchar(15) COLLATE utf8_bin NOT NULL,
  `micro` varchar(255) COLLATE utf8_bin NOT NULL,
  `situacao` varchar(50) CHARACTER SET utf8 NOT NULL,
  `estminimo` int(11) NOT NULL,
  `estmaximo` int(11) NOT NULL,
  `estmedio` varchar(50) COLLATE utf8_bin NOT NULL,
  `mensagem` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`codigo_produto`, `descricao`, `unidade`, `quantidade`, `total_produto`, `gruproduto`, `subgrupo`, `referencia`, `codigobarra`, `lote`, `micro`, `situacao`, `estminimo`, `estmaximo`, `estmedio`, `mensagem`) VALUES
(2, 'Lápis', 5, 33, 139, 'Escritorio', 'Escolar', 'bic', 1111, 'sim', '11111111111', 'Ativo', 1, 5, '1,55', 'teste 2 teste nessa bagaçaa'),
(3, 'Caderno', 2, 30, 60, 'Escritorio', 'Escolar', 'tirill', 1100, 'sim', '22222222222', 'Ativo', 1, 2, '18,99', 'teste 3'),
(4, 'Papel', 2, 100, 200, 'Escritorio', '', '', 10010, 'sim', '77777777777', 'Ativo', 1, 100, '20,00', 'Teste 9'),
(5, 'Pincel', 6, 5, 30, 'Escritorio', '', '', 1010, 'sim', '22222222222', 'Ativo', 1, 5, '5,00', 'Teste 10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `requisitante`
--

CREATE TABLE `requisitante` (
  `codigo_requisitante` varchar(11) COLLATE utf8_bin NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `local` varchar(255) COLLATE utf8_bin NOT NULL,
  `departamento` varchar(255) COLLATE utf8_bin NOT NULL,
  `mensagem` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `requisitante`
--

INSERT INTO `requisitante` (`codigo_requisitante`, `nome`, `local`, `departamento`, `mensagem`) VALUES
('12211222111', 'Ciclano', 'Pires', 'TI', 'Teste 6'),
('12221112222', 'Fulano Dias', 'Fileto Pires', 'Economia', 'Teste 5'),
('31212323231', 'Beltrano', 'Itacoatiara', 'RH', 'Teste 7'),
('32332232232', 'Gião', 'Paritins', 'RH', 'Teste 8');

-- --------------------------------------------------------

--
-- Estrutura da tabela `saida_estoque`
--

CREATE TABLE `saida_estoque` (
  `req_codigo_req` varchar(11) COLLATE utf8_bin NOT NULL,
  `departamento` varchar(255) COLLATE utf8_bin NOT NULL,
  `data` varchar(10) COLLATE utf8_bin NOT NULL,
  `cod_prod_saida` int(11) NOT NULL,
  `prod` varchar(255) COLLATE utf8_bin NOT NULL,
  `unid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `saida_estoque`
--

INSERT INTO `saida_estoque` (`req_codigo_req`, `departamento`, `data`, `cod_prod_saida`, `prod`, `unid`) VALUES
('12211222111', 'TI', '03/12/2019', 1, 'Caneta azul', 3),
('31212323231', 'RH', '05/11/2015', 4, 'Papel', 1),
('12221112222', 'Economia', '02/11/2018', 2, 'Lápis', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `codigo` int(11) NOT NULL,
  `cpf` varchar(20) COLLATE utf8_bin NOT NULL,
  `senha` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`codigo`, `cpf`, `senha`) VALUES
(7, '02063350248', '45dcc70d23ff2d69e72fc64e5bb1c3aa'),
(8, '03610146273', '827ccb0eea8a706c4c34a16891f84e7b'),
(9, '123.456.789-10', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`cnpj`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`codigo_produto`);

--
-- Indexes for table `requisitante`
--
ALTER TABLE `requisitante`
  ADD PRIMARY KEY (`codigo_requisitante`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
