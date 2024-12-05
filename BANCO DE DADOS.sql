create database filmesdb;
use filmesdb;

create table filme (
	id int auto_increment primary key,
	nome varchar(50) not null,
	ano year not null,
	descricao text not null,
	imagem text default 'https://th.bing.com/th/id/OIP.XcpzdbQlaZosxJETudbiwQHaLH?rs=1&pid=ImgDetMain'
);

select * from filme f;

INSERT INTO filme (nome, ano, descricao, imagem) values
('Um Sonho de Liberdade', 1994, 'Dois homens presos se reúnem ao longo de vários anos, encontrando consolo e eventual redenção através de atos de decência comum.', 'https://media.fstatic.com/bi6IriUIKSwtQSeiJG9eg4DB9Ps=/fit-in/210x312/smart/media/movies/covers/2013/01/9144285c2a269b1a161b5a7e41e3761e.jpg'),
('O Poderoso Chefão', 1972, 'O patriarca idoso de uma dinastia do crime organizado transfere o controle de seu império clandestino para seu filho relutante.', 'https://nerdtatuado.com.br/wp-content/uploads/2022/03/Godfather_BR_800x1200.jpg'),
('Vingadores: Ultimato', 2019, 'Os heróis mais poderosos da Terra se unem para desfazer os danos causados por Thanos em uma batalha final épica.', 'https://image.tmdb.org/t/p/original/mI1Ktgg7LuhwAhUgke4rHUxlDUr.jpg'),
('Batman: O Cavaleiro das Trevas', 2008, 'Agora com a ajuda do tenente Jim Gordon e do promotor público Harvey Dent, Batman tem tudo para banir o crime de Gotham City de uma vez por todas. Mas em breve, os três serão vítimas do Coringa, que pretende lançar Gotham em uma anarquia.', 'https://1.bp.blogspot.com/-AfxqI-mOxYc/Uht6OPbPLMI/AAAAAAAAAnw/aE3tSXZQ5m8/s1600/Batman+-+O+Cavaleiro+das+Trevas.jpg'),
('O Senhor dos Anéis: O Retorno do Rei', 2003, 'Gandalf e Aragorn lideram o Mundo dos Homens contra o exército de Sauron para desviar o olhar de Frodo e Sam quando eles se aproximam á Montanha da Perdição com o Um Anel.', 'https://images-na.ssl-images-amazon.com/images/S/pv-target-images/14c0ad22598d8d9a21b2c68b94079a89bbc9f95748bab1e018bb201ef59f8d2b._RI_V_TTW_.jpg'),
('Homem-Aranha: Através do Aranhaverso', 2023, 'Depois de se reunir com Gwen Stacy, Homem-Aranha é jogado no multiverso. Lá, o super-herói aracnídeo encontra uma numerosa equipe encarregada de proteger sua própria existência.', 'https://th.bing.com/th/id/OIP.cMGuzHhbchDU0dvSPnUlIwHaKr?rs=1&pid=ImgDetMain'),
('Os Guerreiros da Noite', 1979, 'Uma gangue de Nova York precisa atravessar territórios hostis para chegar ao seu lar, enfrentando perigos e inimigos pelo caminho.', 'https://higinocultural.com.br/wp-content/uploads/2021/09/Dvd-Original-Guerreiros-Da-Noite-Dvd-Light.jpg');



INSERT INTO filme (nome, ano, descricao) values
('Fronteiras do Amanhã', 2021, 'Uma missão espacial explora os confins do sistema solar, descobrindo sinais de vida inteligente em um planeta distante.'),
('A Chave Mestra', 2005, 'Um thriller psicológico onde uma jovem enfermeira descobre segredos sombrios ao cuidar de um idoso em uma mansão no sul dos EUA.'),
('Ecos do Passado', 1999, 'Um homem começa a ter visões perturbadoras após ser hipnotizado, levando-o a descobrir segredos de um crime há muito tempo enterrado.'),
('O Livro de Eli', 2010, 'Em um mundo pós-apocalíptico, um homem solitário luta para proteger um livro que pode salvar a humanidade.'),
('O Espetacular Circo dos Sonhos', 2011, 'Dois mágicos rivais se enfrentam em um espetáculo de fantasia, onde cada ato esconde mistérios inimagináveis.'),
('Sombras do Terror', 2014, 'Um grupo de amigos encontra um antigo ritual que desperta forças sinistras em sua pequena cidade.'),
('A Máquina do Tempo', 2002, 'Um cientista constrói uma máquina do tempo para mudar o passado, mas descobre as consequências imprevisíveis de suas ações.'),
('A Lenda de Beowulf', 2007, 'Uma adaptação épica do poema clássico, onde o herói enfrenta monstros e desafios para proteger seu reino.'),
('A Origem dos Sonhos', 2010, 'Um thriller inovador sobre a invasão de sonhos e a manipulação da mente para plantar ideias.'),
('O Retorno do Herói', 2019, 'Um cavaleiro exilado volta para casa para salvar sua terra de um inimigo sombrio que ameaça destruir tudo.'),
('Códigos do Medo', 2007, 'Um matemático brilhante é forçado a decifrar enigmas perigosos enquanto é perseguido por uma organização secreta.'),
('A Última Fortaleza', 2001, 'Presos em uma prisão militar, detentos planejam um motim para recuperar sua honra e liberdade.'),
('Os Exploradores do Futuro', 1985, 'Três jovens amigos constroem uma nave espacial caseira e partem em uma aventura para o desconhecido.'),
('Marcas do Passado', 2004, 'Uma mulher retorna à sua cidade natal para confrontar os segredos que assombraram sua infância.'),
('O Alvorecer do Mundo', 1997, 'Uma ficção científica épica sobre a colonização de um novo planeta e os desafios enfrentados pela humanidade.'),
('O Guerreiro Solitário', 2012, 'Um samurai solitário busca vingança contra o clã que destruiu sua família, enfrentando dilemas de honra e sacrifício.'),
('A Ilha do Medo', 2010, 'Um detetive investiga o desaparecimento de uma paciente em um hospital psiquiátrico, descobrindo segredos perturbadores.'),
('O Coração Valente', 1995, 'Um épico histórico sobre a luta pela liberdade liderada por William Wallace na Escócia medieval.'),
('Estrelas Além do Tempo', 2016, 'Baseado em uma história real, o filme mostra o trabalho essencial de mulheres afro-americanas na corrida espacial.'),
('O Clube dos Cinco', 1985, 'Cinco adolescentes de diferentes grupos sociais passam um dia juntos em detenção e formam laços inesperados.'),
('A Caminho da Eternidade', 1953, 'Um drama romântico ambientado em uma base militar no Havaí antes do ataque a Pearl Harbor.'),
('O Labirinto do Fauno', 2006, 'Uma fantasia sombria onde uma jovem encontra um mundo mágico enquanto tenta escapar das dificuldades da guerra civil espanhola.'),
('O Grande Truque', 2006, 'Dois mágicos rivais travam uma batalha de criatividade, obsessão e traição no final do século XIX.'),
('Os Caçadores da Arca Perdida', 1981, 'Um arqueólogo embarca em uma aventura para encontrar a Arca da Aliança antes que ela caia nas mãos dos nazistas.'),
('O Senhor dos Anéis: A Sociedade do Anel', 2001, 'Um grupo improvável embarca em uma jornada épica para destruir um anel maligno e salvar a Terra Média.'),
('O Hobbit: Uma Jornada Inesperada', 2012, 'Bilbo Bolseiro é arrastado para uma aventura com anões para recuperar sua terra e enfrentar um dragão perigoso.'),
('Avatar', 2009, 'Num mundo alienígena deslumbrante, um humano se conecta com uma tribo nativa e luta para proteger seu lar.'),
('Gladiador', 2000, 'Um general romano caído em desgraça luta como gladiador para vingar sua família e restaurar sua honra.'),
('Jurassic Park', 1993, 'Um parque temático com dinossauros recriados geneticamente se torna um caos após falhas de segurança.'),
('Titanic', 1997, 'Uma história de amor trágica entre dois passageiros de classes sociais diferentes no infame navio Titanic.'),
('Harry Potter e a Pedra Filosofal', 2001, 'Um jovem descobre que é um bruxo e começa sua jornada no mundo mágico de Hogwarts.'),
('Pulp Fiction', 1994, 'Histórias interligadas de crime, amor e redenção em Los Angeles.'),
('Forrest Gump', 1994, 'A incrível jornada de um homem simples que impacta eventos históricos enquanto busca sua felicidade.'),
('Interestelar', 2014, 'Uma equipe de exploradores viaja por um buraco de minhoca em busca de um novo lar para a humanidade.'),
('Duna', 2021, 'Em um futuro distante, uma jovem herdeira luta pelo controle de um planeta desértico e seus recursos preciosos.'),
('A Origem', 2010, 'Ladrões de sonhos invadem a mente das pessoas para roubar e implantar ideias em um thriller psicológico inovador.'),
('Pantera Negra', 2018, 'T’Challa retorna a Wakanda para assumir o trono, enfrentando desafios internos e externos ao seu reinado.'),
('Os Infiltrados', 2006, 'Um policial disfarçado se infiltra em uma organização criminosa, enquanto um informante opera no lado oposto.'),
('Corra!', 2017, 'Um jovem afro-americano visita a família de sua namorada branca e descobre segredos sinistros.'),
('Coringa', 2019, 'A origem sombria de um dos maiores vilões, mostrando sua transformação em um símbolo do caos.'),
('A Vida é Bela', 1997, 'Um pai usa sua imaginação para proteger seu filho do horror de um campo de concentração nazista.'),
('Os Intocáveis', 1987, 'A luta de um grupo de agentes federais para derrubar o império do crime de Al Capone em Chicago.'),
('Matrix', 1999, 'Um hacker descobre que a realidade é uma simulação e lidera a luta contra um sistema opressor.'),
('O Resgate do Soldado Ryan', 1998, 'Um grupo de soldados é enviado atrás das linhas inimigas para salvar um paraquedista durante a Segunda Guerra Mundial.'),
('A Viagem de Chihiro', 2001, 'Uma jovem garota embarca em uma jornada mágica em um mundo misterioso repleto de espíritos, onde ela precisa resgatar seus pais transformados em porcos.');

select * from filme f;