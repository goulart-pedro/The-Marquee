CREATE TABLE Movies(
	Id int PRIMARY KEY NOT NULL,
	Title varchar(56) NOT NULL,
	Description text NOT NULL,
	Tagline varchar(56) NOT NULL,
	Trailer varchar(64)
	
);

CREATE TABLE Related(
	Id int PRIMARY KEY NOT NULL,
	Related1 int(1),
	Related2 int(1),
	Related3 int(1),
	Related4 int(1)
);



INSERT INTO Movies (`Id`,`Title`,`Tagline`,`Description`,`Trailer`) VALUES
('0', '1917', 'hope is something', 'Na Primeira Guerra Mundial, dois soldados britânicos recebem ordens aparentemente impossíveis de cumprir. Em uma corrida contra o tempo, eles precisam atravessar o território inimigo e entregar uma mensagem que pode salvar 1.600 de seus companheiros.', 'UcmZN0Mbl04'),
('1', 'O Guarda Costas', 'will always love you', 'Frank Farmer, um guarda-costas altamente eficiente e caro, é contratado para proteger Rachel Marron, uma grande cantora e atriz que está recebendo cartas anônimas e ameaçadoras. Frank é um ex-agente do Serviço Secreto que ainda não se perdoou do sentimento de culpa em relação à sua inabilidade de proteger o presidente Reagan, que quase foi assassinado. Frank e Rachel se apaixonam e logo ele se torna parte integrante do círculo íntimo dela. Paralelamente, novos atentados acontecem.', 'cndM_b_ftpw'),
('2', 'Bohemian Rhapsody', 'is this the real life', 'Freddie Mercury, Brian May, Roger Taylor e John Deacon formam a banda de rock Queen em 1970. Quando o estilo de vida agitado de Mercury começa a sair de controle, o grupo precisa encontrar uma forma de lidar com o sucesso e os excessos de seu líder.', 'GryRsVhOvxo'),
('3', 'O Destino de uma Nação', 'never never surrender', 'Winston Churchill (Gary Oldman) está prestes a encarar um de seus maiores desafios: tomar posse do cargo de Primeiro Ministro da Grã-Bretanha. Paralelamente, ele começa a costurar um tratado de paz com a Alemanha Nazista que pode significar o fim de anos de conflito.', 'LtJ60u7SUSw'),
('4', 'Os Oito Odiados ', 'No one comes here without a good reason', 'Em busca de abrigo para se proteger de uma nevasca, dois caçadores de recompensas, um prisioneiro e um homem que alega ser xerife conhecem quatro estranhos.', 'nIOmotayDMY'),
('5', 'Interestelar', 'the only way', 'As reservas naturais da Terra estão chegando ao fim e um grupo de astronautas recebe a missão de verificar possíveis planetas para receberem a população mundial, possibilitando a continuação da espécie. Cooper é chamado para liderar o grupo e aceita a missão sabendo que pode nunca mais ver os filhos. Ao lado de Brand, Jenkins e Doyle, ele seguirá em busca de um novo lar.', '2LqzF5WauAw'),
('6', 'Logan', 'i hurt myself today', 'Em 2024, os mutantes estão em franco declínio, e as pessoas não sabem o real motivo. Uma organização está transformando as crianças mutantes em verdadeiras assassinas. Wolverine, cansado de tudo e a pedido de um cada vez mais enfraquecido Professor Xavier, precisa proteger a jovem e poderosa Laura Kinney, conhecida como X-23. Enquanto isso, o vilão Nathaniel Essex amplia seu projeto de destruição.', 'Div0iP65aZo'),
('7', 'O Senhor dos Anéis', 'one ring to rule them all', 'Em busca de abrigo para se proteger de uma nevasca, dois caçadores de recompensas, um prisioneiro e um homem que alega ser xerife conhecem quatro estranhos.', 'V75dMMIW2B4'),
('8', 'Perdido Em Marte', 'bring him home', 'O astronauta Mark Watney é enviado a uma missão para Marte, mas após uma severa tempestade, ele é dado como morto, abandonado pelos colegas e acorda sozinho no planeta inóspito com escassos suprimentos e sem saber como reencontrar os companheiros ou retornar à Terra. Ele inicia então uma dura luta pela própria sobrevivência, utilizando de todo o seu conhecimento científico para fazer contato e retornar para casa.', 'ej3ioOneTy8'),
('9', 'Era uma vez no Oeste', 'make you and li', 'Em virtude das terras que possuía serem futuramente a rota da estrada de ferro, um pai e todos os filhos são brutalmente assassinados por um matador profissional. Entretanto, ninguém sabia que ele, viúvo há seis anos, tinha se casado com uma outra mulher, de Nova Orleans, que passa ser a dona do local e recebe a proteção de um hábil atirador, que tem contas a ajustar com o frio matador.', 'MNGQ1hUyx-k'),
('10', 'O Fantasma da Ópera', 'my power ov', 'O Fantasma, em seu esconderijo em baixo de uma casa de ópera em Paris, no Século 19, planeja uma forma de se aproximar da vocalista Christine Daae. Ele, usando uma máscara para esconder um defeito congênito, consegue os papéis principais para a estrela, mas ela se apaixona pelo benfeitor das artes, Raoul. Apavorado com a ideia de sua ausência, o Fantasma cria um plano para manter Christine ao seu lado, enquanto Raoul tenta derrubar o esquema. missão sabendo que pode nunca mais ver os filhos. Ao lado de Brand, Jenkins e Doyle, ele seguirá em busca de um novo lar.', 'N91AL8sAh9o-k'),
('11', 'Titanic', 'never let go', 'Um artista pobre e uma jovem rica se conhecem e se apaixonam na fatídica jornada do Titanic, em 1912. Embora esteja noiva do arrogante herdeiro de uma siderúrgica, a jovem desafia sua família e amigos em busca do verdadeiro amor.', 'b0KYvGa_nN8');


INSERT INTO Related (`Id`, `Related1`, `Related2`, `Related3`, `Related4`) VALUES
('0', '3', '5', '8', '9'),
('1', '11', '10', '2', '5'),
('2', '10', '1', '11', '5'),
('3', '0', '5', '8', '9'),
('4', '9', '6', '7', '3'),
('5', '3', '0', '8', '9'),
('6', '4', '9', '7', '3'),
('7', '4', '6', '9', '3'),
('8', '3', '5', '0', '9'),
('9', '4', '6', '7', '3'),
('10', '11', '1', '2', '5'),
('11', '10', '1', '2', '5');
