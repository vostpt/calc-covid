<?php
require_once '../vendor/autoload.php';

$title = 'Calculadora Concelhos em Risco Elevado';
$description = 'Quantos casos precisa de ter o meu concelho para entrar no estado de emergência?';
include 'includes/head.php';

$config = HTMLPurifier_Config::createDefault();
$purifier = new HTMLPurifier($config);

$concelho = $_GET['concelho'] ? htmlentities($purifier->purify($_GET['concelho']), ENT_QUOTES, 'UTF-8') : false;
$cases = $_GET['casos'] ? htmlentities($purifier->purify($_GET['casos']), ENT_QUOTES, 'UTF-8') : false;

?>

<div class="container">
    <div class="row mt-5">
        <div class="md-form mt-0 col-12">
            <input type="text" id="casos" name="casos" class="form-control" value="<?= $cases ?>">
            <label for="casos">Número de casos confirmados nos últimos 14 dias</label>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <select class="js-select" name="count">
                <option data-min='0' value='POPULAÇÃO PORDATA' <?php if($concelho === 'NOME CONCELHO'): ?> selected <?php endif; ?>>NOME CONCELHO</option>
                <option data-min='85' value='35254' <?php if($concelho === 'Abrantes'): ?> selected <?php endif; ?>>Abrantes</option>
                <option data-min='111' value='46034' <?php if($concelho === 'Águeda'): ?> selected <?php endif; ?>>Águeda</option>
                <option data-min='12' value='4696' <?php if($concelho === 'Aguiar da Beira'): ?> selected <?php endif; ?>>Aguiar da Beira</option>
                <option data-min='13' value='5028' <?php if($concelho === 'Alandroal'): ?> selected <?php endif; ?>>Alandroal</option>
                <option data-min='58' value='24136' <?php if($concelho === 'Albergaria-a-Velha'): ?> selected <?php endif; ?>>Albergaria-a-Velha</option>
                <option data-min='100' value='41326' <?php if($concelho === 'Albufeira'): ?> selected <?php endif; ?>>Albufeira</option>
                <option data-min='29' value='11686' <?php if($concelho === 'Alcácer do Sal'): ?> selected <?php endif; ?>>Alcácer do Sal</option>
                <option data-min='31' value='12835' <?php if($concelho === 'Alcanena'): ?> selected <?php endif; ?>>Alcanena</option>
                <option data-min='129' value='53598' <?php if($concelho === 'Alcobaça'): ?> selected <?php endif; ?>>Alcobaça</option>
                <option data-min='48' value='19646' <?php if($concelho === 'Alcochete'): ?> selected <?php endif; ?>>Alcochete</option>
                <option data-min='6' value='2202' <?php if($concelho === 'Alcoutim'): ?> selected <?php endif; ?>>Alcoutim</option>
                <option data-min='106' value='43824' <?php if($concelho === 'Alenquer'): ?> selected <?php endif; ?>>Alenquer</option>
                <option data-min='11' value='4559' <?php if($concelho === 'Alfândega da Fé'): ?> selected <?php endif; ?>>Alfândega da Fé</option>
                <option data-min='26' value='10664' <?php if($concelho === 'Alijó'): ?> selected <?php endif; ?>>Alijó</option>
                <option data-min='14' value='5597' <?php if($concelho === 'Aljezur'): ?> selected <?php endif; ?>>Aljezur</option>
                <option data-min='20' value='8266' <?php if($concelho === 'Aljustrel'): ?> selected <?php endif; ?>>Aljustrel</option>
                <option data-min='406' value='169013' <?php if($concelho === 'Almada'): ?> selected <?php endif; ?>>Almada</option>
                <option data-min='15' value='5878' <?php if($concelho === 'Almeida'): ?> selected <?php endif; ?>>Almeida</option>
                <option data-min='55' value='22558' <?php if($concelho === 'Almeirim'): ?> selected <?php endif; ?>>Almeirim</option>
                <option data-min='17' value='6736' <?php if($concelho === 'Almodôvar'): ?> selected <?php endif; ?>>Almodôvar</option>
                <option data-min='17' value='7073' <?php if($concelho === 'Alpiarça'): ?> selected <?php endif; ?>>Alpiarça</option>
                <option data-min='8' value='3178' <?php if($concelho === 'Alter do Chão'): ?> selected <?php endif; ?>>Alter do Chão</option>
                <option data-min='16' value='6612' <?php if($concelho === 'Alvaiázere'): ?> selected <?php endif; ?>>Alvaiázere</option>
                <option data-min='6' value='2470' <?php if($concelho === 'Alvito'): ?> selected <?php endif; ?>>Alvito</option>
                <option data-min='439' value='182915' <?php if($concelho === 'Amadora'): ?> selected <?php endif; ?>>Amadora</option>
                <option data-min='128' value='53280' <?php if($concelho === 'Amarante'): ?> selected <?php endif; ?>>Amarante</option>
                <option data-min='44' value='18122' <?php if($concelho === 'Amares'): ?> selected <?php endif; ?>>Amares</option>
                <option data-min='66' value='27278' <?php if($concelho === 'Anadia'): ?> selected <?php endif; ?>>Anadia</option>
                <option data-min='29' value='12073' <?php if($concelho === 'Ansião'): ?> selected <?php endif; ?>>Ansião</option>
                <option data-min='51' value='20948' <?php if($concelho === 'Arcos de Valdevez'): ?> selected <?php endif; ?>>Arcos de Valdevez</option>
                <option data-min='27' value='11041' <?php if($concelho === 'Arganil'): ?> selected <?php endif; ?>>Arganil</option>
                <option data-min='14' value='5781' <?php if($concelho === 'Armamar'): ?> selected <?php endif; ?>>Armamar</option>
                <option data-min='50' value='20791' <?php if($concelho === 'Arouca'): ?> selected <?php endif; ?>>Arouca</option>
                <option data-min='17' value='6936' <?php if($concelho === 'Arraiolos'): ?> selected <?php endif; ?>>Arraiolos</option>
                <option data-min='7' value='2840' <?php if($concelho === 'Arronches'): ?> selected <?php endif; ?>>Arronches</option>
                <option data-min='37' value='15247' <?php if($concelho === 'Arruda dos Vinhos'): ?> selected <?php endif; ?>>Arruda dos Vinhos</option>
                <option data-min='188' value='78325' <?php if($concelho === 'Aveiro'): ?> selected <?php endif; ?>>Aveiro</option>
                <option data-min='11' value='4248' <?php if($concelho === 'Avis'): ?> selected <?php endif; ?>>Avis</option>
                <option data-min='55' value='22581' <?php if($concelho === 'Azambuja'): ?> selected <?php endif; ?>>Azambuja</option>
                <option data-min='46' value='18820' <?php if($concelho === 'Baião'): ?> selected <?php endif; ?>>Baião</option>
                <option data-min='280' value='116359' <?php if($concelho === 'Barcelos'): ?> selected <?php endif; ?>>Barcelos</option>
                <option data-min='4' value='1640' <?php if($concelho === 'Barrancos'): ?> selected <?php endif; ?>>Barrancos</option>
                <option data-min='181' value='75283' <?php if($concelho === 'Barreiro'): ?> selected <?php endif; ?>>Barreiro</option>
                <option data-min='39' value='15902' <?php if($concelho === 'Batalha'): ?> selected <?php endif; ?>>Batalha</option>
                <option data-min='81' value='33565' <?php if($concelho === 'Beja'): ?> selected <?php endif; ?>>Beja</option>
                <option data-min='16' value='6403' <?php if($concelho === 'Belmonte'): ?> selected <?php endif; ?>>Belmonte</option>
                <option data-min='73' value='30408' <?php if($concelho === 'Benavente'): ?> selected <?php endif; ?>>Benavente</option>
                <option data-min='31' value='12546' <?php if($concelho === 'Bombarral'): ?> selected <?php endif; ?>>Bombarral</option>
                <option data-min='17' value='6763' <?php if($concelho === 'Borba'): ?> selected <?php endif; ?>>Borba</option>
                <option data-min='13' value='5029' <?php if($concelho === 'Boticas'): ?> selected <?php endif; ?>>Boticas</option>
                <option data-min='438' value='182299' <?php if($concelho === 'Braga'): ?> selected <?php endif; ?>>Braga</option>
                <option data-min='81' value='33597' <?php if($concelho === 'Bragança'): ?> selected <?php endif; ?>>Bragança</option>
                <option data-min='38' value='15664' <?php if($concelho === 'Cabeceiras de Basto'): ?> selected <?php endif; ?>>Cabeceiras de Basto</option>
                <option data-min='33' value='13650' <?php if($concelho === 'Cadaval'): ?> selected <?php endif; ?>>Cadaval</option>
                <option data-min='125' value='51726' <?php if($concelho === 'Caldas da Rainha'): ?> selected <?php endif; ?>>Caldas da Rainha</option>
                <option data-min='39' value='15875' <?php if($concelho === 'Caminha'): ?> selected <?php endif; ?>>Caminha</option>
                <option data-min='19' value='7891' <?php if($concelho === 'Campo Maior'): ?> selected <?php endif; ?>>Campo Maior</option>
                <option data-min='85' value='35040' <?php if($concelho === 'Cantanhede'): ?> selected <?php endif; ?>>Cantanhede</option>
                <option data-min='14' value='5675' <?php if($concelho === 'Carrazeda de Ansiães'): ?> selected <?php endif; ?>>Carrazeda de Ansiães</option>
                <option data-min='23' value='9281' <?php if($concelho === 'Carregal do Sal'): ?> selected <?php endif; ?>>Carregal do Sal</option>
                <option data-min='58' value='23792' <?php if($concelho === 'Cartaxo'): ?> selected <?php endif; ?>>Cartaxo</option>
                <option data-min='512' value='213041' <?php if($concelho === 'Cascais'): ?> selected <?php endif; ?>>Cascais</option>
                <option data-min='7' value='2632' <?php if($concelho === 'Castanheira de Pêra'): ?> selected <?php endif; ?>>Castanheira de Pêra</option>
                <option data-min='126' value='52090' <?php if($concelho === 'Castelo Branco'): ?> selected <?php endif; ?>>Castelo Branco</option>
                <option data-min='38' value='15511' <?php if($concelho === 'Castelo de Paiva'): ?> selected <?php endif; ?>>Castelo de Paiva</option>
                <option data-min='8' value='2935' <?php if($concelho === 'Castelo de Vide'): ?> selected <?php endif; ?>>Castelo de Vide</option>
                <option data-min='34' value='13876' <?php if($concelho === 'Castro Daire'): ?> selected <?php endif; ?>>Castro Daire</option>
                <option data-min='16' value='6256' <?php if($concelho === 'Castro Marim'): ?> selected <?php endif; ?>>Castro Marim</option>
                <option data-min='17' value='6948' <?php if($concelho === 'Castro Verde'): ?> selected <?php endif; ?>>Castro Verde</option>
                <option data-min='17' value='6953' <?php if($concelho === 'Celorico da Beira'): ?> selected <?php endif; ?>>Celorico da Beira</option>
                <option data-min='46' value='19058' <?php if($concelho === 'Celorico de Basto'): ?> selected <?php endif; ?>>Celorico de Basto</option>
                <option data-min='23' value='9225' <?php if($concelho === 'Chamusca'): ?> selected <?php endif; ?>>Chamusca</option>
                <option data-min='95' value='39344' <?php if($concelho === 'Chaves'): ?> selected <?php endif; ?>>Chaves</option>
                <option data-min='45' value='18357' <?php if($concelho === 'Cinfães'): ?> selected <?php endif; ?>>Cinfães</option>
                <option data-min='322' value='133945' <?php if($concelho === 'Coimbra'): ?> selected <?php endif; ?>>Coimbra</option>
                <option data-min='43' value='17665' <?php if($concelho === 'Condeixa-a-Nova'): ?> selected <?php endif; ?>>Condeixa-a-Nova</option>
                <option data-min='10' value='4016' <?php if($concelho === 'Constância'): ?> selected <?php endif; ?>>Constância</option>
                <option data-min='43' value='17550' <?php if($concelho === 'Coruche'): ?> selected <?php endif; ?>>Coruche</option>
                <option data-min='113' value='46957' <?php if($concelho === 'Covilhã'): ?> selected <?php endif; ?>>Covilhã</option>
                <option data-min='8' value='3157' <?php if($concelho === 'Crato'): ?> selected <?php endif; ?>>Crato</option>
                <option data-min='12' value='4597' <?php if($concelho === 'Cuba'): ?> selected <?php endif; ?>>Cuba</option>
                <option data-min='50' value='20617' <?php if($concelho === 'Elvas'): ?> selected <?php endif; ?>>Elvas</option>
                <option data-min='52' value='21386' <?php if($concelho === 'Entroncamento'): ?> selected <?php endif; ?>>Entroncamento</option>
                <option data-min='71' value='29500' <?php if($concelho === 'Espinho'): ?> selected <?php endif; ?>>Espinho</option>
                <option data-min='82' value='34117' <?php if($concelho === 'Esposende'): ?> selected <?php endif; ?>>Esposende</option>
                <option data-min='63' value='25986' <?php if($concelho === 'Estarreja'): ?> selected <?php endif; ?>>Estarreja</option>
                <option data-min='31' value='12772' <?php if($concelho === 'Estremoz'): ?> selected <?php endif; ?>>Estremoz</option>
                <option data-min='126' value='52441' <?php if($concelho === 'Évora'): ?> selected <?php endif; ?>>Évora</option>
                <option data-min='116' value='48166' <?php if($concelho === 'Fafe'): ?> selected <?php endif; ?>>Fafe</option>
                <option data-min='147' value='60995' <?php if($concelho === 'Faro'): ?> selected <?php endif; ?>>Faro</option>
                <option data-min='136' value='56499' <?php if($concelho === 'Felgueiras'): ?> selected <?php endif; ?>>Felgueiras</option>
                <option data-min='19' value='7847' <?php if($concelho === 'Ferreira do Alentejo'): ?> selected <?php endif; ?>>Ferreira do Alentejo</option>
                <option data-min='20' value='7974' <?php if($concelho === 'Ferreira do Zêzere'): ?> selected <?php endif; ?>>Ferreira do Zêzere</option>
                <option data-min='142' value='58807' <?php if($concelho === 'Figueira da Foz'): ?> selected <?php endif; ?>>Figueira da Foz</option>
                <option data-min='14' value='5618' <?php if($concelho === 'Figueira de Castelo Rodrigo'): ?> selected <?php endif; ?>>Figueira de Castelo Rodrigo</option>
                <option data-min='14' value='5588' <?php if($concelho === 'Figueiró dos Vinhos'): ?> selected <?php endif; ?>>Figueiró dos Vinhos</option>
                <option data-min='11' value='4545' <?php if($concelho === 'Fornos de Algodres'): ?> selected <?php endif; ?>>Fornos de Algodres</option>
                <option data-min='8' value='3305' <?php if($concelho === 'Freixo de Espada à Cinta'): ?> selected <?php endif; ?>>Freixo de Espada à Cinta</option>
                <option data-min='8' value='2980' <?php if($concelho === 'Fronteira'): ?> selected <?php endif; ?>>Fronteira</option>
                <option data-min='64' value='26607' <?php if($concelho === 'Fundão'): ?> selected <?php endif; ?>>Fundão</option>
                <option data-min='8' value='3305' <?php if($concelho === 'Gavião'): ?> selected <?php endif; ?>>Gavião</option>
                <option data-min='10' value='3815' <?php if($concelho === 'Góis'): ?> selected <?php endif; ?>>Góis</option>
                <option data-min='13' value='5357' <?php if($concelho === 'Golegã'): ?> selected <?php endif; ?>>Golegã</option>
                <option data-min='398' value='165808' <?php if($concelho === 'Gondomar'): ?> selected <?php endif; ?>>Gondomar</option>
                <option data-min='30' value='12437' <?php if($concelho === 'Gouveia'): ?> selected <?php endif; ?>>Gouveia</option>
                <option data-min='36' value='14605' <?php if($concelho === 'Grândola'): ?> selected <?php endif; ?>>Grândola</option>
                <option data-min='94' value='39036' <?php if($concelho === 'Guarda'): ?> selected <?php endif; ?>>Guarda</option>
                <option data-min='367' value='152551' <?php if($concelho === 'Guimarães'): ?> selected <?php endif; ?>>Guimarães</option>
                <option data-min='20' value='8100' <?php if($concelho === 'Idanha-a-Nova'): ?> selected <?php endif; ?>>Idanha-a-Nova</option>
                <option data-min='93' value='38552' <?php if($concelho === 'Ílhavo'): ?> selected <?php endif; ?>>Ílhavo</option>
                <option data-min='73' value='30408' <?php if($concelho === 'Lagos'): ?> selected <?php endif; ?>>Lagos</option>
                <option data-min='60' value='24927' <?php if($concelho === 'Lamego'): ?> selected <?php endif; ?>>Lamego</option>
                <option data-min='301' value='125062' <?php if($concelho === 'Leiria'): ?> selected <?php endif; ?>>Leiria</option>
                <option data-min='1221' value='508368' <?php if($concelho === 'Lisboa'): ?> selected <?php endif; ?>>Lisboa</option>
                <option data-min='166' value='68785' <?php if($concelho === 'Loulé'): ?> selected <?php endif; ?>>Loulé</option>
                <option data-min='511' value='212523' <?php if($concelho === 'Loures'): ?> selected <?php endif; ?>>Loures</option>
                <option data-min='62' value='25763' <?php if($concelho === 'Lourinhã'): ?> selected <?php endif; ?>>Lourinhã</option>
                <option data-min='42' value='17143' <?php if($concelho === 'Lousã'): ?> selected <?php endif; ?>>Lousã</option>
                <option data-min='113' value='46773' <?php if($concelho === 'Lousada'): ?> selected <?php endif; ?>>Lousada</option>
                <option data-min='16' value='6295' <?php if($concelho === 'Mação'): ?> selected <?php endif; ?>>Mação</option>
                <option data-min='35' value='14533' <?php if($concelho === 'Macedo de Cavaleiros'): ?> selected <?php endif; ?>>Macedo de Cavaleiros</option>
                <option data-min='203' value='84412' <?php if($concelho === 'Mafra'): ?> selected <?php endif; ?>>Mafra</option>
                <option data-min='333' value='138349' <?php if($concelho === 'Maia'): ?> selected <?php endif; ?>>Maia</option>
                <option data-min='45' value='18564' <?php if($concelho === 'Mangualde'): ?> selected <?php endif; ?>>Mangualde</option>
                <option data-min='8' value='3022' <?php if($concelho === 'Manteigas'): ?> selected <?php endif; ?>>Manteigas</option>
                <option data-min='124' value='51579' <?php if($concelho === 'Marco de Canaveses'): ?> selected <?php endif; ?>>Marco de Canaveses</option>
                <option data-min='93' value='38456' <?php if($concelho === 'Marinha Grande'): ?> selected <?php endif; ?>>Marinha Grande</option>
                <option data-min='8' value='3030' <?php if($concelho === 'Marvão'): ?> selected <?php endif; ?>>Marvão</option>
                <option data-min='420' value='174870' <?php if($concelho === 'Matosinhos'): ?> selected <?php endif; ?>>Matosinhos</option>
                <option data-min='48' value='19903' <?php if($concelho === 'Mealhada'): ?> selected <?php endif; ?>>Mealhada</option>
                <option data-min='20' value='8119' <?php if($concelho === 'Melgaço'): ?> selected <?php endif; ?>>Melgaço</option>
                <option data-min='15' value='6172' <?php if($concelho === 'Mértola'): ?> selected <?php endif; ?>>Mértola</option>
                <option data-min='10' value='3980' <?php if($concelho === 'Mesão Frio'): ?> selected <?php endif; ?>>Mesão Frio</option>
                <option data-min='29' value='11832' <?php if($concelho === 'Mira'): ?> selected <?php endif; ?>>Mira</option>
                <option data-min='31' value='12698' <?php if($concelho === 'Miranda do Corvo'): ?> selected <?php endif; ?>>Miranda do Corvo</option>
                <option data-min='17' value='6854' <?php if($concelho === 'Miranda do Douro'): ?> selected <?php endif; ?>>Miranda do Douro</option>
                <option data-min='53' value='21781' <?php if($concelho === 'Mirandela'): ?> selected <?php endif; ?>>Mirandela</option>
                <option data-min='21' value='8437' <?php if($concelho === 'Mogadouro'): ?> selected <?php endif; ?>>Mogadouro</option>
                <option data-min='24' value='9733' <?php if($concelho === 'Moimenta da Beira'): ?> selected <?php endif; ?>>Moimenta da Beira</option>
                <option data-min='155' value='64467' <?php if($concelho === 'Moita'): ?> selected <?php endif; ?>>Moita</option>
                <option data-min='43' value='17886' <?php if($concelho === 'Monção'): ?> selected <?php endif; ?>>Monção</option>
                <option data-min='13' value='5130' <?php if($concelho === 'Monchique'): ?> selected <?php endif; ?>>Monchique</option>
                <option data-min='17' value='6966' <?php if($concelho === 'Mondim de Basto'): ?> selected <?php endif; ?>>Mondim de Basto</option>
                <option data-min='8' value='2982' <?php if($concelho === 'Monforte'): ?> selected <?php endif; ?>>Monforte</option>
                <option data-min='22' value='9044' <?php if($concelho === 'Montalegre'): ?> selected <?php endif; ?>>Montalegre</option>
                <option data-min='38' value='15694' <?php if($concelho === 'Montemor-o-Novo'): ?> selected <?php endif; ?>>Montemor-o-Novo</option>
                <option data-min='61' value='25227' <?php if($concelho === 'Montemor-o-Velho'): ?> selected <?php endif; ?>>Montemor-o-Velho</option>
                <option data-min='138' value='57251' <?php if($concelho === 'Montijo'): ?> selected <?php endif; ?>>Montijo</option>
                <option data-min='10' value='4163' <?php if($concelho === 'Mora'): ?> selected <?php endif; ?>>Mora</option>
                <option data-min='22' value='8830' <?php if($concelho === 'Mortágua'): ?> selected <?php endif; ?>>Mortágua</option>
                <option data-min='33' value='13734' <?php if($concelho === 'Moura'): ?> selected <?php endif; ?>>Moura</option>
                <option data-min='6' value='2453' <?php if($concelho === 'Mourão'): ?> selected <?php endif; ?>>Mourão</option>
                <option data-min='14' value='5472' <?php if($concelho === 'Murça'): ?> selected <?php endif; ?>>Murça</option>
                <option data-min='25' value='10262' <?php if($concelho === 'Murtosa'): ?> selected <?php endif; ?>>Murtosa</option>
                <option data-min='35' value='14173' <?php if($concelho === 'Nazaré'): ?> selected <?php endif; ?>>Nazaré</option>
                <option data-min='32' value='13002' <?php if($concelho === 'Nelas'): ?> selected <?php endif; ?>>Nelas</option>
                <option data-min='15' value='6105' <?php if($concelho === 'Nisa'): ?> selected <?php endif; ?>>Nisa</option>
                <option data-min='29' value='11785' <?php if($concelho === 'Óbidos'): ?> selected <?php endif; ?>>Óbidos</option>
                <option data-min='60' value='24669' <?php if($concelho === 'Odemira'): ?> selected <?php endif; ?>>Odemira</option>
                <option data-min='386' value='160688' <?php if($concelho === 'Odivelas'): ?> selected <?php endif; ?>>Odivelas</option>
                <option data-min='425' value='176813' <?php if($concelho === 'Oeiras'): ?> selected <?php endif; ?>>Oeiras</option>
                <option data-min='13' value='5024' <?php if($concelho === 'Oleiros'): ?> selected <?php endif; ?>>Oleiros</option>
                <option data-min='107' value='44506' <?php if($concelho === 'Olhão'): ?> selected <?php endif; ?>>Olhão</option>
                <option data-min='159' value='66062' <?php if($concelho === 'Oliveira de Azeméis'): ?> selected <?php endif; ?>>Oliveira de Azeméis</option>
                <option data-min='24' value='9928' <?php if($concelho === 'Oliveira de Frades'): ?> selected <?php endif; ?>>Oliveira de Frades</option>
                <option data-min='58' value='24111' <?php if($concelho === 'Oliveira do Bairro'): ?> selected <?php endif; ?>>Oliveira do Bairro</option>
                <option data-min='47' value='19292' <?php if($concelho === 'Oliveira do Hospital'): ?> selected <?php endif; ?>>Oliveira do Hospital</option>
                <option data-min='106' value='44056' <?php if($concelho === 'Ourém'): ?> selected <?php endif; ?>>Ourém</option>
                <option data-min='12' value='4630' <?php if($concelho === 'Ourique'): ?> selected <?php endif; ?>>Ourique</option>
                <option data-min='131' value='54190' <?php if($concelho === 'Ovar'): ?> selected <?php endif; ?>>Ovar</option>
                <option data-min='137' value='56719' <?php if($concelho === 'Paços de Ferreira'): ?> selected <?php endif; ?>>Paços de Ferreira</option>
                <option data-min='155' value='64242' <?php if($concelho === 'Palmela'): ?> selected <?php endif; ?>>Palmela</option>
                <option data-min='10' value='4045' <?php if($concelho === 'Pampilhosa da Serra'): ?> selected <?php endif; ?>>Pampilhosa da Serra</option>
                <option data-min='207' value='86070' <?php if($concelho === 'Paredes'): ?> selected <?php endif; ?>>Paredes</option>
                <option data-min='21' value='8548' <?php if($concelho === 'Paredes de Coura'): ?> selected <?php endif; ?>>Paredes de Coura</option>
                <option data-min='9' value='3420' <?php if($concelho === 'Pedrógão Grande'): ?> selected <?php endif; ?>>Pedrógão Grande</option>
                <option data-min='34' value='13753' <?php if($concelho === 'Penacova'): ?> selected <?php endif; ?>>Penacova</option>
                <option data-min='168' value='69847' <?php if($concelho === 'Penafiel'): ?> selected <?php endif; ?>>Penafiel</option>
                <option data-min='18' value='7145' <?php if($concelho === 'Penalva do Castelo'): ?> selected <?php endif; ?>>Penalva do Castelo</option>
                <option data-min='12' value='4793' <?php if($concelho === 'Penamacor'): ?> selected <?php endif; ?>>Penamacor</option>
                <option data-min='7' value='2601' <?php if($concelho === 'Penedono'): ?> selected <?php endif; ?>>Penedono</option>
                <option data-min='14' value='5418' <?php if($concelho === 'Penela'): ?> selected <?php endif; ?>>Penela</option>
                <option data-min='64' value='26494' <?php if($concelho === 'Peniche'): ?> selected <?php endif; ?>>Peniche</option>
                <option data-min='38' value='15802' <?php if($concelho === 'Peso da Régua'): ?> selected <?php endif; ?>>Peso da Régua</option>
                <option data-min='21' value='8559' <?php if($concelho === 'Pinhel'): ?> selected <?php endif; ?>>Pinhel</option>
                <option data-min='124' value='51573' <?php if($concelho === 'Pombal'): ?> selected <?php endif; ?>>Pombal</option>
                <option data-min='27' value='11195' <?php if($concelho === 'Ponte da Barca'): ?> selected <?php endif; ?>>Ponte da Barca</option>
                <option data-min='100' value='41407' <?php if($concelho === 'Ponte de Lima'): ?> selected <?php endif; ?>>Ponte de Lima</option>
                <option data-min='37' value='15043' <?php if($concelho === 'Ponte de Sor'): ?> selected <?php endif; ?>>Ponte de Sor</option>
                <option data-min='54' value='22266' <?php if($concelho === 'Portalegre'): ?> selected <?php endif; ?>>Portalegre</option>
                <option data-min='15' value='5849' <?php if($concelho === 'Portel'): ?> selected <?php endif; ?>>Portel</option>
                <option data-min='134' value='55450' <?php if($concelho === 'Portimão'): ?> selected <?php endif; ?>>Portimão</option>
                <option data-min='519' value='215945' <?php if($concelho === 'Porto'): ?> selected <?php endif; ?>>Porto</option>
                <option data-min='56' value='23282' <?php if($concelho === 'Porto de Mós'): ?> selected <?php endif; ?>>Porto de Mós</option>
                <option data-min='52' value='21473' <?php if($concelho === 'Póvoa de Lanhoso'): ?> selected <?php endif; ?>>Póvoa de Lanhoso</option>
                <option data-min='151' value='62647' <?php if($concelho === 'Póvoa de Varzim'): ?> selected <?php endif; ?>>Póvoa de Varzim</option>
                <option data-min='18' value='7344' <?php if($concelho === 'Proença-a-Nova'): ?> selected <?php endif; ?>>Proença-a-Nova</option>
                <option data-min='16' value='6370' <?php if($concelho === 'Redondo'): ?> selected <?php endif; ?>>Redondo</option>
                <option data-min='25' value='10026' <?php if($concelho === 'Reguengos de Monsaraz'): ?> selected <?php endif; ?>>Reguengos de Monsaraz</option>
                <option data-min='25' value='10189' <?php if($concelho === 'Resende'): ?> selected <?php endif; ?>>Resende</option>
                <option data-min='15' value='6024' <?php if($concelho === 'Ribeira de Pena'): ?> selected <?php endif; ?>>Ribeira de Pena</option>
                <option data-min='49' value='20360' <?php if($concelho === 'Rio Maior'): ?> selected <?php endif; ?>>Rio Maior</option>
                <option data-min='15' value='5918' <?php if($concelho === 'Sabrosa'): ?> selected <?php endif; ?>>Sabrosa</option>
                <option data-min='26' value='10667' <?php if($concelho === 'Sabugal'): ?> selected <?php endif; ?>>Sabugal</option>
                <option data-min='52' value='21282' <?php if($concelho === 'Salvaterra de Magos'): ?> selected <?php endif; ?>>Salvaterra de Magos</option>
                <option data-min='26' value='10479' <?php if($concelho === 'Santa Comba Dão'): ?> selected <?php endif; ?>>Santa Comba Dão</option>
                <option data-min='333' value='138581' <?php if($concelho === 'Santa Maria da Feira'): ?> selected <?php endif; ?>>Santa Maria da Feira</option>
                <option data-min='16' value='6624' <?php if($concelho === 'Santa Marta de Penaguião'): ?> selected <?php endif; ?>>Santa Marta de Penaguião</option>
                <option data-min='138' value='57410' <?php if($concelho === 'Santarém'): ?> selected <?php endif; ?>>Santarém</option>
                <option data-min='70' value='28758' <?php if($concelho === 'Santiago do Cacém'): ?> selected <?php endif; ?>>Santiago do Cacém</option>
                <option data-min='164' value='68138' <?php if($concelho === 'Santo Tirso'): ?> selected <?php endif; ?>>Santo Tirso</option>
                <option data-min='25' value='10416' <?php if($concelho === 'São Brás de Alportel'): ?> selected <?php endif; ?>>São Brás de Alportel</option>
                <option data-min='53' value='21860' <?php if($concelho === 'São João da Madeira'): ?> selected <?php endif; ?>>São João da Madeira</option>
                <option data-min='18' value='7140' <?php if($concelho === 'São João da Pesqueira'): ?> selected <?php endif; ?>>São João da Pesqueira</option>
                <option data-min='38' value='15446' <?php if($concelho === 'São Pedro do Sul'): ?> selected <?php endif; ?>>São Pedro do Sul</option>
                <option data-min='9' value='3740' <?php if($concelho === 'Sardoal'): ?> selected <?php endif; ?>>Sardoal</option>
                <option data-min='28' value='11591' <?php if($concelho === 'Sátão'): ?> selected <?php endif; ?>>Sátão</option>
                <option data-min='54' value='22323' <?php if($concelho === 'Seia'): ?> selected <?php endif; ?>>Seia</option>
                <option data-min='402' value='167294' <?php if($concelho === 'Seixal'): ?> selected <?php endif; ?>>Seixal</option>
                <option data-min='13' value='5390' <?php if($concelho === 'Sernancelhe'): ?> selected <?php endif; ?>>Sernancelhe</option>
                <option data-min='35' value='14339' <?php if($concelho === 'Serpa'): ?> selected <?php endif; ?>>Serpa</option>
                <option data-min='36' value='14630' <?php if($concelho === 'Sertã'): ?> selected <?php endif; ?>>Sertã</option>
                <option data-min='125' value='51709' <?php if($concelho === 'Sesimbra'): ?> selected <?php endif; ?>>Sesimbra</option>
                <option data-min='278' value='115442' <?php if($concelho === 'Setúbal'): ?> selected <?php endif; ?>>Setúbal</option>
                <option data-min='28' value='11367' <?php if($concelho === 'Sever do Vouga'): ?> selected <?php endif; ?>>Sever do Vouga</option>
                <option data-min='87' value='36200' <?php if($concelho === 'Silves'): ?> selected <?php endif; ?>>Silves</option>
                <option data-min='33' value='13673' <?php if($concelho === 'Sines'): ?> selected <?php endif; ?>>Sines</option>
                <option data-min='936' value='389918' <?php if($concelho === 'Sintra'): ?> selected <?php endif; ?>>Sintra</option>
                <option data-min='26' value='10571' <?php if($concelho === 'Sobral de Monte Agraço'): ?> selected <?php endif; ?>>Sobral de Monte Agraço</option>
                <option data-min='42' value='17199' <?php if($concelho === 'Soure'): ?> selected <?php endif; ?>>Soure</option>
                <option data-min='11' value='4433' <?php if($concelho === 'Sousel'): ?> selected <?php endif; ?>>Sousel</option>
                <option data-min='28' value='11386' <?php if($concelho === 'Tábua'): ?> selected <?php endif; ?>>Tábua</option>
                <option data-min='15' value='6025' <?php if($concelho === 'Tabuaço'): ?> selected <?php endif; ?>>Tabuaço</option>
                <option data-min='19' value='7783' <?php if($concelho === 'Tarouca'): ?> selected <?php endif; ?>>Tarouca</option>
                <option data-min='60' value='24640' <?php if($concelho === 'Tavira'): ?> selected <?php endif; ?>>Tavira</option>
                <option data-min='16' value='6383' <?php if($concelho === 'Terras de Bouro'): ?> selected <?php endif; ?>>Terras de Bouro</option>
                <option data-min='89' value='36825' <?php if($concelho === 'Tomar'): ?> selected <?php endif; ?>>Tomar</option>
                <option data-min='64' value='26453' <?php if($concelho === 'Tondela'): ?> selected <?php endif; ?>>Tondela</option>
                <option data-min='19' value='7706' <?php if($concelho === 'Torre de Moncorvo'): ?> selected <?php endif; ?>>Torre de Moncorvo</option>
                <option data-min='84' value='34952' <?php if($concelho === 'Torres Novas'): ?> selected <?php endif; ?>>Torres Novas</option>
                <option data-min='189' value='78375' <?php if($concelho === 'Torres Vedras'): ?> selected <?php endif; ?>>Torres Vedras</option>
                <option data-min='22' value='8911' <?php if($concelho === 'Trancoso'): ?> selected <?php endif; ?>>Trancoso</option>
                <option data-min='93' value='38368' <?php if($concelho === 'Trofa'): ?> selected <?php endif; ?>>Trofa</option>
                <option data-min='55' value='22713' <?php if($concelho === 'Vagos'): ?> selected <?php endif; ?>>Vagos</option>
                <option data-min='52' value='21363' <?php if($concelho === 'Vale de Cambra'): ?> selected <?php endif; ?>>Vale de Cambra</option>
                <option data-min='32' value='13287' <?php if($concelho === 'Valença'): ?> selected <?php endif; ?>>Valença</option>
                <option data-min='233' value='97007' <?php if($concelho === 'Valongo'): ?> selected <?php endif; ?>>Valongo</option>
                <option data-min='36' value='14875' <?php if($concelho === 'Valpaços'): ?> selected <?php endif; ?>>Valpaços</option>
                <option data-min='28' value='11257' <?php if($concelho === 'Vendas Novas'): ?> selected <?php endif; ?>>Vendas Novas</option>
                <option data-min='13' value='5144' <?php if($concelho === 'Viana do Alentejo'): ?> selected <?php endif; ?>>Viana do Alentejo</option>
                <option data-min='203' value='84527' <?php if($concelho === 'Viana do Castelo'): ?> selected <?php endif; ?>>Viana do Castelo</option>
                <option data-min='14' value='5504' <?php if($concelho === 'Vidigueira'): ?> selected <?php endif; ?>>Vidigueira</option>
                <option data-min='29' value='11870' <?php if($concelho === 'Vieira do Minho'): ?> selected <?php endif; ?>>Vieira do Minho</option>
                <option data-min='8' value='3322' <?php if($concelho === 'Vila de Rei'): ?> selected <?php endif; ?>>Vila de Rei</option>
                <option data-min='13' value='5154' <?php if($concelho === 'Vila do Bispo'): ?> selected <?php endif; ?>>Vila do Bispo</option>
                <option data-min='192' value='79739' <?php if($concelho === 'Vila do Conde'): ?> selected <?php endif; ?>>Vila do Conde</option>
                <option data-min='15' value='6059' <?php if($concelho === 'Vila Flor'): ?> selected <?php endif; ?>>Vila Flor</option>
                <option data-min='341' value='141780' <?php if($concelho === 'Vila Franca de Xira'): ?> selected <?php endif; ?>>Vila Franca de Xira</option>
                <option data-min='18' value='7432' <?php if($concelho === 'Vila Nova da Barquinha'): ?> selected <?php endif; ?>>Vila Nova da Barquinha</option>
                <option data-min='22' value='8894' <?php if($concelho === 'Vila Nova de Cerveira'): ?> selected <?php endif; ?>>Vila Nova de Cerveira</option>
                <option data-min='317' value='131707' <?php if($concelho === 'Vila Nova de Famalicão'): ?> selected <?php endif; ?>>Vila Nova de Famalicão</option>
                <option data-min='16' value='6522' <?php if($concelho === 'Vila Nova de Foz Côa'): ?> selected <?php endif; ?>>Vila Nova de Foz Côa</option>
                <option data-min='721' value='300205' <?php if($concelho === 'Vila Nova de Gaia'): ?> selected <?php endif; ?>>Vila Nova de Gaia</option>
                <option data-min='12' value='4705' <?php if($concelho === 'Vila Nova de Paiva'): ?> selected <?php endif; ?>>Vila Nova de Paiva</option>
                <option data-min='17' value='6934' <?php if($concelho === 'Vila Nova de Poiares'): ?> selected <?php endif; ?>>Vila Nova de Poiares</option>
                <option data-min='29' value='11985' <?php if($concelho === 'Vila Pouca de Aguiar'): ?> selected <?php endif; ?>>Vila Pouca de Aguiar</option>
                <option data-min='120' value='49915' <?php if($concelho === 'Vila Real'): ?> selected <?php endif; ?>>Vila Real</option>
                <option data-min='46' value='18819' <?php if($concelho === 'Vila Real de Santo António'): ?> selected <?php endif; ?>>Vila Real de Santo António</option>
                <option data-min='8' value='3156' <?php if($concelho === 'Vila Velha de Ródão'): ?> selected <?php endif; ?>>Vila Velha de Ródão</option>
                <option data-min='113' value='46888' <?php if($concelho === 'Vila Verde'): ?> selected <?php endif; ?>>Vila Verde</option>
                <option data-min='19' value='7688' <?php if($concelho === 'Vila Viçosa'): ?> selected <?php endif; ?>>Vila Viçosa</option>
                <option data-min='10' value='4047' <?php if($concelho === 'Vimioso'): ?> selected <?php endif; ?>>Vimioso</option>
                <option data-min='19' value='7797' <?php if($concelho === 'Vinhais'): ?> selected <?php endif; ?>>Vinhais</option>
                <option data-min='234' value='97120' <?php if($concelho === 'Viseu'): ?> selected <?php endif; ?>>Viseu</option>
                <option data-min='58' value='23869' <?php if($concelho === 'Vizela'): ?> selected <?php endif; ?>>Vizela</option>
                <option data-min='24' value='9722' <?php if($concelho === 'Vouzela'): ?> selected <?php endif; ?>>Vouzela</option>
            </select>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12 text-center">
            <button class="btn btn-primary js-calc">Calcular</button>
        </div>
    </div>

    <div class="row mt-5 js-emergency" style="display:none">
        <div class="col-12 text-center">
            <p class="pp">Com <span class="js-cases"></span> casos confirmados nos últimos 14 dias <strong><span class="js-concelho"></span></p>
            <p class="pp"><span class="nop">entra em ESTADO DE EMERGÊNCIA</span></p>
        </div>
    </div>

    <div class="row mt-5 js-not-emergency" style="display:none">
        <div class="col-12 text-center">
            <p class="pp">Com <span class="js-cases"></span> casos confirmados nos últimos 14 dias <strong><span class="js-concelho"></span></strong></p>
            <p><span class="yeah">NÃO ENTRA em estado de emergência</span></p>
            <p class="pp">Mas com <span class="js-min"></span> já entrava.</p>
        </div>
    </div>

</div>

<script>
    var goForIt = <?= $concelho ? 1 : 0 ?>;
</script>
<?php include 'includes/foot.php'; ?>
