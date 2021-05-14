<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/oauth/authorize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.authorize',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.approve',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.deny',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.tokens.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/token/refresh' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token.refresh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/clients' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/scopes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.scopes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/personal-access-tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/clicksign/hooks/sign' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RKhPON5dAs3zz1wD',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/endereco_incorporadora' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ExAxMhr9e6Cmao1d',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/endereco_incorporadora/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::J1NrV30U5fCTK1X5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/documento' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ek2p2Fp0pXN9P0SP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/documento/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3r1tZyVIPfifsAcI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/investimento' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ar7BSZvGNmSKueX3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/investimento/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SdvgcL8z7NQ1kO9T',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/resetar_senha' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MBYPrmN58GfKSKmS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/endereco_usuario' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xjWourSt1Ud3FudN',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/endereco_usuario/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YPVw6WQDKbn6Vzzu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/estado_civil' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uYX7U9Khti18xmSD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/estado_civil/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OmLohlJfY7zePsH2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/foto_empreendimento' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6w6OC0amULtbgXkU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/foto_empreendimento/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nKY6GOibmZJUB5jT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/banco' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PloH6knfjtYObkqf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/banco/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ksDSD5VfZj3hXIDu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dados_bancarios' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jR3Nd43jJI9kLR3Q',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dados_bancarios/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VBva3ClkNfA1fARm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dados_pessoais' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UukScCQpaYCBnqVs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dados_pessoais/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3jr1k36yLfXQ712S',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dados_pessoais/upload_foto' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gx4eGo1Uf287T35j',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dados_pessoais/upload_foto_update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::S6ldTDrG0VQwEfQE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/usuario/meus_investimentos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WOM17nahb5DTjZs2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/click_sign/assinar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u9BPQPxhzkX6tfY4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/empreendimento' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yVn1dBhhobfJmX11',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/empreendimento/finalizados' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WJYInw1n6muBQWnW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Q7rmHOksAbbi2x77',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ypC5suwlRUd3fA4R',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/incorporadora/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fSmmhOIbMkciBWGE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/incorporadora/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dwlaQcPZePYBsUN3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/incorporadora' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nB5vyuDOr98C8dVR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/incorporadora/logo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pnfoN8W6z8NKCC4w',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/incorporadora/logo/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eZVVfUZNd5nvqn0X',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/incorporadora/dados' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FK9UIZTBDiFN3fBm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/incorporadora/dados/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::a6inVEbPxJxs1ELx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/incorporadora/endereco' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AhbskqVpj9kpZSyh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/incorporadora/endereco/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YVti9YqhVN20U5Yo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/incorporadora/socio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Zvr6pU4Ul0YH1FLg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/incorporadora/socio/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Mk8VE7xXQiawpyVo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/adm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MfXCyW2yQHDCVniB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/adm/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rB91oK9e13FuayzE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/adm/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5lqyzvcsPBlYRZPT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/empreendimento/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XMfFIZMyylcTgjBt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KilYz3ADVu2FeqiW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/oauth/(?|tokens/([^/]++)(*:32)|clients/([^/]++)(?|(*:58))|personal\\-access\\-tokens/([^/]++)(*:99))|/api/(?|e(?|ndereco_(?|incorporadora/(?|show/([^/]++)(*:160)|update/([^/]++)(*:183)|destroy/([^/]++)(*:207))|usuario/(?|show/([^/]++)(*:240)|update/([^/]++)(*:263)|destroy/([^/]++)(*:287)))|mpreendimento/(?|update/([^/]++)(*:329)|destroy/([^/]++)(*:353)|s(?|how/([^/]++)(*:377)|lug/([^/]++)(*:397)))|stado_civil/(?|show/([^/]++)(*:435)|update/([^/]++)(*:458)|destroy/([^/]++)(*:482)))|in(?|vesti(?|mento/(?|show/([^/]++)(*:527)|update/([^/]++)(*:550)|destroy/([^/]++)(*:574))|dores/([^/]++)(*:597))|corporadora/(?|logo/(?|show/([^/]++)(*:642)|update/([^/]++)(*:665)|destroy/([^/]++)(*:689))|dados/(?|show/([^/]++)(*:720)|update/([^/]++)(*:743)|destroy/([^/]++)(*:767))|endereco/(?|show/([^/]++)(*:801)|update/([^/]++)(*:824)|destroy/([^/]++)(*:848))|socio/(?|show/([^/]++)(*:879)|update/([^/]++)(*:902)|destroy/([^/]++)(*:926))))|foto_empreendimento/(?|update/([^/]++)(*:975)|destroy/([^/]++)(*:999))|banco/(?|show/([^/]++)(*:1030)|update/([^/]++)(*:1054)|destroy/([^/]++)(*:1079))|dados_bancarios/update/([^/]++)(*:1120)))/?$}sDu',
    ),
    3 => 
    array (
      32 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      58 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.update',
          ),
          1 => 
          array (
            0 => 'client_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.destroy',
          ),
          1 => 
          array (
            0 => 'client_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      99 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      160 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nHXfmLC5cgY9Nctk',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      183 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SmEQbbpttT6X00uf',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      207 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JBcYkPAw7uVqWDfR',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      240 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RO2ryXyY64aQ1g4D',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      263 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dnfOJFdvkQC6Agev',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      287 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XsTyZUyx2jNPyAE2',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      329 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QtQRQovF4ygCkuq5',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      353 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gB3iFbVgjLwZ6sc7',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      377 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pCiJdTvFHPo7vPXq',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      397 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ptJQzscySW1hAWo2',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      435 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hbYbkNHQzEdMPzY4',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      458 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cJFKnKrc3AWA0l5P',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      482 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OHkIUsyZtzQygaxT',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      527 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jEsTPQ7XT4DMATba',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      550 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DBUeZfIYsROzyLcs',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      574 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XJvuOWV8Iyg3ayAM',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      597 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OjRxhuh5qja0vPPp',
          ),
          1 => 
          array (
            0 => 'empreendimento_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      642 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GDYfNOsXw4Obqx5C',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      665 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mYxflkXR0NX3FRyy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      689 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9etLWLcrmg22sIsn',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      720 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4QlRTHusabPUmgB6',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      743 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8O5r2LRnxzwSLIRc',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      767 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::A7b045IDZQSsFZzD',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      801 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jOprHNpVD3oqecG4',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      824 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0B6El1s665I47Bnt',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      848 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VH3bj4CCqrL5aUQJ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      879 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jsiOXxrAZOapbFAl',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      902 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n9gYY7sep5n6otCb',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      926 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gxYM4W2GctTJY5aT',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      975 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w9buWgUbEWI4EsHg',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      999 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zA1PhfaHgma1j89y',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1030 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lR6npWBvHd6TCcXK',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1054 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iPu7QCGlEyxyrcmX',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1079 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xQ6bq4bYsjCRtFS8',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1120 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::c6v7RDuPrEILrpTC',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'passport.authorizations.authorize' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizationController@authorize',
        'as' => 'passport.authorizations.authorize',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizationController@authorize',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.authorizations.approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController@approve',
        'as' => 'passport.authorizations.approve',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController@approve',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.authorizations.deny' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController@deny',
        'as' => 'passport.authorizations.deny',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController@deny',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.token' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/token',
      'action' => 
      array (
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'as' => 'passport.token',
        'middleware' => 'throttle',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@forUser',
        'as' => 'passport.tokens.index',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@forUser',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/tokens/{token_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@destroy',
        'as' => 'passport.tokens.destroy',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@destroy',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.token.refresh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/token/refresh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'as' => 'passport.token.refresh',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.clients.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@forUser',
        'as' => 'passport.clients.index',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@forUser',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.clients.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@store',
        'as' => 'passport.clients.store',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@store',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.clients.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'oauth/clients/{client_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@update',
        'as' => 'passport.clients.update',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@update',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.clients.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/clients/{client_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@destroy',
        'as' => 'passport.clients.destroy',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@destroy',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.scopes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/scopes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ScopeController@all',
        'as' => 'passport.scopes.index',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ScopeController@all',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.personal.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/personal-access-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@forUser',
        'as' => 'passport.personal.tokens.index',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@forUser',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.personal.tokens.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/personal-access-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@store',
        'as' => 'passport.personal.tokens.store',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@store',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.personal.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/personal-access-tokens/{token_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@destroy',
        'as' => 'passport.personal.tokens.destroy',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@destroy',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::RKhPON5dAs3zz1wD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/clicksign/hooks/sign',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":260:{@Lf1xjnvSJI8qisbLVKqawSfseeYDCVhfcVxSPLjUvQw=.a:5:{s:3:"use";a:0:{}s:8:"function";s:48:"function () {
            return true;
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000002915feb10000000068dabb3a";}}',
        'namespace' => NULL,
        'prefix' => 'api/clicksign/hooks',
        'where' => 
        array (
        ),
        'as' => 'generated::RKhPON5dAs3zz1wD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ExAxMhr9e6Cmao1d' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/endereco_incorporadora',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EnderecoIncorporadoraController@index',
        'controller' => 'App\\Http\\Controllers\\EnderecoIncorporadoraController@index',
        'namespace' => NULL,
        'prefix' => 'api/endereco_incorporadora',
        'where' => 
        array (
        ),
        'as' => 'generated::ExAxMhr9e6Cmao1d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::nHXfmLC5cgY9Nctk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/endereco_incorporadora/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EnderecoIncorporadoraController@show',
        'controller' => 'App\\Http\\Controllers\\EnderecoIncorporadoraController@show',
        'namespace' => NULL,
        'prefix' => 'api/endereco_incorporadora',
        'where' => 
        array (
        ),
        'as' => 'generated::nHXfmLC5cgY9Nctk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::J1NrV30U5fCTK1X5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/endereco_incorporadora/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EnderecoIncorporadoraController@create',
        'controller' => 'App\\Http\\Controllers\\EnderecoIncorporadoraController@create',
        'namespace' => NULL,
        'prefix' => 'api/endereco_incorporadora',
        'where' => 
        array (
        ),
        'as' => 'generated::J1NrV30U5fCTK1X5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::SmEQbbpttT6X00uf' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/endereco_incorporadora/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EnderecoIncorporadoraController@update',
        'controller' => 'App\\Http\\Controllers\\EnderecoIncorporadoraController@update',
        'namespace' => NULL,
        'prefix' => 'api/endereco_incorporadora',
        'where' => 
        array (
        ),
        'as' => 'generated::SmEQbbpttT6X00uf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::JBcYkPAw7uVqWDfR' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/endereco_incorporadora/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EnderecoIncorporadoraController@destroy',
        'controller' => 'App\\Http\\Controllers\\EnderecoIncorporadoraController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/endereco_incorporadora',
        'where' => 
        array (
        ),
        'as' => 'generated::JBcYkPAw7uVqWDfR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Ek2p2Fp0pXN9P0SP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/documento',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\DocumentoController@index',
        'controller' => 'App\\Http\\Controllers\\DocumentoController@index',
        'namespace' => NULL,
        'prefix' => 'api/documento',
        'where' => 
        array (
        ),
        'as' => 'generated::Ek2p2Fp0pXN9P0SP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3r1tZyVIPfifsAcI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/documento/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\DocumentoController@create',
        'controller' => 'App\\Http\\Controllers\\DocumentoController@create',
        'namespace' => NULL,
        'prefix' => 'api/documento',
        'where' => 
        array (
        ),
        'as' => 'generated::3r1tZyVIPfifsAcI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Ar7BSZvGNmSKueX3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/investimento',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\InvestimentoController@index',
        'controller' => 'App\\Http\\Controllers\\InvestimentoController@index',
        'namespace' => NULL,
        'prefix' => 'api/investimento',
        'where' => 
        array (
        ),
        'as' => 'generated::Ar7BSZvGNmSKueX3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::jEsTPQ7XT4DMATba' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/investimento/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\InvestimentoController@show',
        'controller' => 'App\\Http\\Controllers\\InvestimentoController@show',
        'namespace' => NULL,
        'prefix' => 'api/investimento',
        'where' => 
        array (
        ),
        'as' => 'generated::jEsTPQ7XT4DMATba',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::SdvgcL8z7NQ1kO9T' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/investimento/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\InvestimentoController@create',
        'controller' => 'App\\Http\\Controllers\\InvestimentoController@create',
        'namespace' => NULL,
        'prefix' => 'api/investimento',
        'where' => 
        array (
        ),
        'as' => 'generated::SdvgcL8z7NQ1kO9T',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DBUeZfIYsROzyLcs' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/investimento/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\InvestimentoController@update',
        'controller' => 'App\\Http\\Controllers\\InvestimentoController@update',
        'namespace' => NULL,
        'prefix' => 'api/investimento',
        'where' => 
        array (
        ),
        'as' => 'generated::DBUeZfIYsROzyLcs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XJvuOWV8Iyg3ayAM' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/investimento/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\InvestimentoController@destroy',
        'controller' => 'App\\Http\\Controllers\\InvestimentoController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/investimento',
        'where' => 
        array (
        ),
        'as' => 'generated::XJvuOWV8Iyg3ayAM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MBYPrmN58GfKSKmS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/resetar_senha',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PasswordController@resetarSenha',
        'controller' => 'App\\Http\\Controllers\\PasswordController@resetarSenha',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::MBYPrmN58GfKSKmS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::xjWourSt1Ud3FudN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/endereco_usuario',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EnderecoController@index',
        'controller' => 'App\\Http\\Controllers\\EnderecoController@index',
        'namespace' => NULL,
        'prefix' => 'api/endereco_usuario',
        'where' => 
        array (
        ),
        'as' => 'generated::xjWourSt1Ud3FudN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::RO2ryXyY64aQ1g4D' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/endereco_usuario/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EnderecoController@show',
        'controller' => 'App\\Http\\Controllers\\EnderecoController@show',
        'namespace' => NULL,
        'prefix' => 'api/endereco_usuario',
        'where' => 
        array (
        ),
        'as' => 'generated::RO2ryXyY64aQ1g4D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::YPVw6WQDKbn6Vzzu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/endereco_usuario/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EnderecoController@create',
        'controller' => 'App\\Http\\Controllers\\EnderecoController@create',
        'namespace' => NULL,
        'prefix' => 'api/endereco_usuario',
        'where' => 
        array (
        ),
        'as' => 'generated::YPVw6WQDKbn6Vzzu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::dnfOJFdvkQC6Agev' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/endereco_usuario/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EnderecoController@update',
        'controller' => 'App\\Http\\Controllers\\EnderecoController@update',
        'namespace' => NULL,
        'prefix' => 'api/endereco_usuario',
        'where' => 
        array (
        ),
        'as' => 'generated::dnfOJFdvkQC6Agev',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XsTyZUyx2jNPyAE2' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/endereco_usuario/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EnderecoController@destroy',
        'controller' => 'App\\Http\\Controllers\\EnderecoController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/endereco_usuario',
        'where' => 
        array (
        ),
        'as' => 'generated::XsTyZUyx2jNPyAE2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::OjRxhuh5qja0vPPp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/investidores/{empreendimento_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\InvestimentoController@investidores',
        'controller' => 'App\\Http\\Controllers\\InvestimentoController@investidores',
        'namespace' => NULL,
        'prefix' => 'api/investidores',
        'where' => 
        array (
        ),
        'as' => 'generated::OjRxhuh5qja0vPPp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::QtQRQovF4ygCkuq5' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/empreendimento/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EmpreendimentoController@update',
        'controller' => 'App\\Http\\Controllers\\EmpreendimentoController@update',
        'namespace' => NULL,
        'prefix' => 'api/empreendimento',
        'where' => 
        array (
        ),
        'as' => 'generated::QtQRQovF4ygCkuq5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::gB3iFbVgjLwZ6sc7' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/empreendimento/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EmpreendimentoController@destroy',
        'controller' => 'App\\Http\\Controllers\\EmpreendimentoController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/empreendimento',
        'where' => 
        array (
        ),
        'as' => 'generated::gB3iFbVgjLwZ6sc7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::uYX7U9Khti18xmSD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/estado_civil',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EstadoCivilController@index',
        'controller' => 'App\\Http\\Controllers\\EstadoCivilController@index',
        'namespace' => NULL,
        'prefix' => 'api/estado_civil',
        'where' => 
        array (
        ),
        'as' => 'generated::uYX7U9Khti18xmSD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::hbYbkNHQzEdMPzY4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/estado_civil/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EstadoCivilController@show',
        'controller' => 'App\\Http\\Controllers\\EstadoCivilController@show',
        'namespace' => NULL,
        'prefix' => 'api/estado_civil',
        'where' => 
        array (
        ),
        'as' => 'generated::hbYbkNHQzEdMPzY4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::OmLohlJfY7zePsH2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/estado_civil/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EstadoCivilController@create',
        'controller' => 'App\\Http\\Controllers\\EstadoCivilController@create',
        'namespace' => NULL,
        'prefix' => 'api/estado_civil',
        'where' => 
        array (
        ),
        'as' => 'generated::OmLohlJfY7zePsH2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::cJFKnKrc3AWA0l5P' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/estado_civil/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EstadoCivilController@update',
        'controller' => 'App\\Http\\Controllers\\EstadoCivilController@update',
        'namespace' => NULL,
        'prefix' => 'api/estado_civil',
        'where' => 
        array (
        ),
        'as' => 'generated::cJFKnKrc3AWA0l5P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::OHkIUsyZtzQygaxT' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/estado_civil/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EstadoCivilController@destroy',
        'controller' => 'App\\Http\\Controllers\\EstadoCivilController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/estado_civil',
        'where' => 
        array (
        ),
        'as' => 'generated::OHkIUsyZtzQygaxT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6w6OC0amULtbgXkU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/foto_empreendimento',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\FotoEmpreendimentoController@index',
        'controller' => 'App\\Http\\Controllers\\FotoEmpreendimentoController@index',
        'namespace' => NULL,
        'prefix' => 'api/foto_empreendimento',
        'where' => 
        array (
        ),
        'as' => 'generated::6w6OC0amULtbgXkU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::nKY6GOibmZJUB5jT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/foto_empreendimento/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\FotoEmpreendimentoController@create',
        'controller' => 'App\\Http\\Controllers\\FotoEmpreendimentoController@create',
        'namespace' => NULL,
        'prefix' => 'api/foto_empreendimento',
        'where' => 
        array (
        ),
        'as' => 'generated::nKY6GOibmZJUB5jT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::w9buWgUbEWI4EsHg' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/foto_empreendimento/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\FotoEmpreendimentoController@update',
        'controller' => 'App\\Http\\Controllers\\FotoEmpreendimentoController@update',
        'namespace' => NULL,
        'prefix' => 'api/foto_empreendimento',
        'where' => 
        array (
        ),
        'as' => 'generated::w9buWgUbEWI4EsHg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::zA1PhfaHgma1j89y' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/foto_empreendimento/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\FotoEmpreendimentoController@destroy',
        'controller' => 'App\\Http\\Controllers\\FotoEmpreendimentoController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/foto_empreendimento',
        'where' => 
        array (
        ),
        'as' => 'generated::zA1PhfaHgma1j89y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::PloH6knfjtYObkqf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/banco',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\BancoController@index',
        'controller' => 'App\\Http\\Controllers\\BancoController@index',
        'namespace' => NULL,
        'prefix' => 'api/banco',
        'where' => 
        array (
        ),
        'as' => 'generated::PloH6knfjtYObkqf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lR6npWBvHd6TCcXK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/banco/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\BancoController@show',
        'controller' => 'App\\Http\\Controllers\\BancoController@show',
        'namespace' => NULL,
        'prefix' => 'api/banco',
        'where' => 
        array (
        ),
        'as' => 'generated::lR6npWBvHd6TCcXK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ksDSD5VfZj3hXIDu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/banco/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\BancoController@create',
        'controller' => 'App\\Http\\Controllers\\BancoController@create',
        'namespace' => NULL,
        'prefix' => 'api/banco',
        'where' => 
        array (
        ),
        'as' => 'generated::ksDSD5VfZj3hXIDu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::iPu7QCGlEyxyrcmX' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/banco/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\BancoController@update',
        'controller' => 'App\\Http\\Controllers\\BancoController@update',
        'namespace' => NULL,
        'prefix' => 'api/banco',
        'where' => 
        array (
        ),
        'as' => 'generated::iPu7QCGlEyxyrcmX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::xQ6bq4bYsjCRtFS8' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/banco/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\BancoController@destroy',
        'controller' => 'App\\Http\\Controllers\\BancoController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/banco',
        'where' => 
        array (
        ),
        'as' => 'generated::xQ6bq4bYsjCRtFS8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::jR3Nd43jJI9kLR3Q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dados_bancarios',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\DadoBancarioController@index',
        'controller' => 'App\\Http\\Controllers\\DadoBancarioController@index',
        'namespace' => NULL,
        'prefix' => 'api/dados_bancarios',
        'where' => 
        array (
        ),
        'as' => 'generated::jR3Nd43jJI9kLR3Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::VBva3ClkNfA1fARm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/dados_bancarios/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\DadoBancarioController@create',
        'controller' => 'App\\Http\\Controllers\\DadoBancarioController@create',
        'namespace' => NULL,
        'prefix' => 'api/dados_bancarios',
        'where' => 
        array (
        ),
        'as' => 'generated::VBva3ClkNfA1fARm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::c6v7RDuPrEILrpTC' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/dados_bancarios/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\DadoBancarioController@update',
        'controller' => 'App\\Http\\Controllers\\DadoBancarioController@update',
        'namespace' => NULL,
        'prefix' => 'api/dados_bancarios',
        'where' => 
        array (
        ),
        'as' => 'generated::c6v7RDuPrEILrpTC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::UukScCQpaYCBnqVs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dados_pessoais',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\UsuarioController@index',
        'controller' => 'App\\Http\\Controllers\\UsuarioController@index',
        'namespace' => NULL,
        'prefix' => 'api/dados_pessoais',
        'where' => 
        array (
        ),
        'as' => 'generated::UukScCQpaYCBnqVs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3jr1k36yLfXQ712S' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/dados_pessoais/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\UsuarioController@salvarDadosPessoais',
        'controller' => 'App\\Http\\Controllers\\UsuarioController@salvarDadosPessoais',
        'namespace' => NULL,
        'prefix' => 'api/dados_pessoais',
        'where' => 
        array (
        ),
        'as' => 'generated::3jr1k36yLfXQ712S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::gx4eGo1Uf287T35j' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/dados_pessoais/upload_foto',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\UsuarioController@uploadFoto',
        'controller' => 'App\\Http\\Controllers\\UsuarioController@uploadFoto',
        'namespace' => NULL,
        'prefix' => 'api/dados_pessoais',
        'where' => 
        array (
        ),
        'as' => 'generated::gx4eGo1Uf287T35j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::S6ldTDrG0VQwEfQE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/dados_pessoais/upload_foto_update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\UsuarioController@uploadFotoUpdate',
        'controller' => 'App\\Http\\Controllers\\UsuarioController@uploadFotoUpdate',
        'namespace' => NULL,
        'prefix' => 'api/dados_pessoais',
        'where' => 
        array (
        ),
        'as' => 'generated::S6ldTDrG0VQwEfQE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WOM17nahb5DTjZs2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/usuario/meus_investimentos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\UsuarioController@meusInvestimentos',
        'controller' => 'App\\Http\\Controllers\\UsuarioController@meusInvestimentos',
        'namespace' => NULL,
        'prefix' => 'api/usuario',
        'where' => 
        array (
        ),
        'as' => 'generated::WOM17nahb5DTjZs2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::u9BPQPxhzkX6tfY4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/click_sign/assinar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\AssinaturaController@criarSignatario',
        'controller' => 'App\\Http\\Controllers\\AssinaturaController@criarSignatario',
        'namespace' => NULL,
        'prefix' => 'api/click_sign',
        'where' => 
        array (
        ),
        'as' => 'generated::u9BPQPxhzkX6tfY4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::yVn1dBhhobfJmX11' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/empreendimento',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\EmpreendimentoController@index',
        'controller' => 'App\\Http\\Controllers\\EmpreendimentoController@index',
        'namespace' => NULL,
        'prefix' => 'api/empreendimento',
        'where' => 
        array (
        ),
        'as' => 'generated::yVn1dBhhobfJmX11',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WJYInw1n6muBQWnW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/empreendimento/finalizados',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\EmpreendimentoController@getProjetosFinalizados',
        'controller' => 'App\\Http\\Controllers\\EmpreendimentoController@getProjetosFinalizados',
        'namespace' => NULL,
        'prefix' => 'api/empreendimento',
        'where' => 
        array (
        ),
        'as' => 'generated::WJYInw1n6muBQWnW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::pCiJdTvFHPo7vPXq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/empreendimento/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\FotoEmpreendimentoController@show',
        'controller' => 'App\\Http\\Controllers\\FotoEmpreendimentoController@show',
        'namespace' => NULL,
        'prefix' => 'api/empreendimento',
        'where' => 
        array (
        ),
        'as' => 'generated::pCiJdTvFHPo7vPXq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ptJQzscySW1hAWo2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/empreendimento/slug/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\EmpreendimentoController@getEmpreendimentoBySlug',
        'controller' => 'App\\Http\\Controllers\\EmpreendimentoController@getEmpreendimentoBySlug',
        'namespace' => NULL,
        'prefix' => 'api/empreendimento',
        'where' => 
        array (
        ),
        'as' => 'generated::ptJQzscySW1hAWo2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Q7rmHOksAbbi2x77' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@register',
        'controller' => 'App\\Http\\Controllers\\AuthController@register',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Q7rmHOksAbbi2x77',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ypC5suwlRUd3fA4R' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@login',
        'controller' => 'App\\Http\\Controllers\\AuthController@login',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ypC5suwlRUd3fA4R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::fSmmhOIbMkciBWGE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/incorporadora/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\IncorporadoraController@register',
        'controller' => 'App\\Http\\Controllers\\IncorporadoraController@register',
        'namespace' => NULL,
        'prefix' => 'api/incorporadora',
        'where' => 
        array (
        ),
        'as' => 'generated::fSmmhOIbMkciBWGE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::dwlaQcPZePYBsUN3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/incorporadora/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\IncorporadoraController@login',
        'controller' => 'App\\Http\\Controllers\\IncorporadoraController@login',
        'namespace' => NULL,
        'prefix' => 'api/incorporadora',
        'where' => 
        array (
        ),
        'as' => 'generated::dwlaQcPZePYBsUN3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::nB5vyuDOr98C8dVR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/incorporadora',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:incorporadoraapi',
          2 => 'checkuser',
        ),
        'uses' => 'App\\Http\\Controllers\\IncorporadoraController@index',
        'controller' => 'App\\Http\\Controllers\\IncorporadoraController@index',
        'namespace' => NULL,
        'prefix' => 'api/incorporadora',
        'where' => 
        array (
        ),
        'as' => 'generated::nB5vyuDOr98C8dVR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::pnfoN8W6z8NKCC4w' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/incorporadora/logo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:incorporadoraapi',
          2 => 'checkuser',
        ),
        'uses' => 'App\\Http\\Controllers\\LogoIncorporadoraController@index',
        'controller' => 'App\\Http\\Controllers\\LogoIncorporadoraController@index',
        'namespace' => NULL,
        'prefix' => 'api/incorporadora/logo',
        'where' => 
        array (
        ),
        'as' => 'generated::pnfoN8W6z8NKCC4w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GDYfNOsXw4Obqx5C' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/incorporadora/logo/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:incorporadoraapi',
          2 => 'checkuser',
        ),
        'uses' => 'App\\Http\\Controllers\\LogoIncorporadoraController@show',
        'controller' => 'App\\Http\\Controllers\\LogoIncorporadoraController@show',
        'namespace' => NULL,
        'prefix' => 'api/incorporadora/logo',
        'where' => 
        array (
        ),
        'as' => 'generated::GDYfNOsXw4Obqx5C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::eZVVfUZNd5nvqn0X' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/incorporadora/logo/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:incorporadoraapi',
          2 => 'checkuser',
        ),
        'uses' => 'App\\Http\\Controllers\\LogoIncorporadoraController@create',
        'controller' => 'App\\Http\\Controllers\\LogoIncorporadoraController@create',
        'namespace' => NULL,
        'prefix' => 'api/incorporadora/logo',
        'where' => 
        array (
        ),
        'as' => 'generated::eZVVfUZNd5nvqn0X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::mYxflkXR0NX3FRyy' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/incorporadora/logo/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:incorporadoraapi',
          2 => 'checkuser',
        ),
        'uses' => 'App\\Http\\Controllers\\LogoIncorporadoraController@update',
        'controller' => 'App\\Http\\Controllers\\LogoIncorporadoraController@update',
        'namespace' => NULL,
        'prefix' => 'api/incorporadora/logo',
        'where' => 
        array (
        ),
        'as' => 'generated::mYxflkXR0NX3FRyy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9etLWLcrmg22sIsn' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/incorporadora/logo/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:incorporadoraapi',
          2 => 'checkuser',
        ),
        'uses' => 'App\\Http\\Controllers\\LogoIncorporadoraController@destroy',
        'controller' => 'App\\Http\\Controllers\\LogoIncorporadoraController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/incorporadora/logo',
        'where' => 
        array (
        ),
        'as' => 'generated::9etLWLcrmg22sIsn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::FK9UIZTBDiFN3fBm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/incorporadora/dados',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:incorporadoraapi',
          2 => 'checkuser',
        ),
        'uses' => 'App\\Http\\Controllers\\DadosIncorporadoraController@index',
        'controller' => 'App\\Http\\Controllers\\DadosIncorporadoraController@index',
        'namespace' => NULL,
        'prefix' => 'api/incorporadora/dados',
        'where' => 
        array (
        ),
        'as' => 'generated::FK9UIZTBDiFN3fBm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4QlRTHusabPUmgB6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/incorporadora/dados/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:incorporadoraapi',
          2 => 'checkuser',
        ),
        'uses' => 'App\\Http\\Controllers\\DadosIncorporadoraController@show',
        'controller' => 'App\\Http\\Controllers\\DadosIncorporadoraController@show',
        'namespace' => NULL,
        'prefix' => 'api/incorporadora/dados',
        'where' => 
        array (
        ),
        'as' => 'generated::4QlRTHusabPUmgB6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::a6inVEbPxJxs1ELx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/incorporadora/dados/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:incorporadoraapi',
          2 => 'checkuser',
        ),
        'uses' => 'App\\Http\\Controllers\\DadosIncorporadoraController@create',
        'controller' => 'App\\Http\\Controllers\\DadosIncorporadoraController@create',
        'namespace' => NULL,
        'prefix' => 'api/incorporadora/dados',
        'where' => 
        array (
        ),
        'as' => 'generated::a6inVEbPxJxs1ELx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::8O5r2LRnxzwSLIRc' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/incorporadora/dados/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:incorporadoraapi',
          2 => 'checkuser',
        ),
        'uses' => 'App\\Http\\Controllers\\DadosIncorporadoraController@update',
        'controller' => 'App\\Http\\Controllers\\DadosIncorporadoraController@update',
        'namespace' => NULL,
        'prefix' => 'api/incorporadora/dados',
        'where' => 
        array (
        ),
        'as' => 'generated::8O5r2LRnxzwSLIRc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::A7b045IDZQSsFZzD' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/incorporadora/dados/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:incorporadoraapi',
          2 => 'checkuser',
        ),
        'uses' => 'App\\Http\\Controllers\\DadosIncorporadoraController@destroy',
        'controller' => 'App\\Http\\Controllers\\DadosIncorporadoraController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/incorporadora/dados',
        'where' => 
        array (
        ),
        'as' => 'generated::A7b045IDZQSsFZzD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::AhbskqVpj9kpZSyh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/incorporadora/endereco',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:incorporadoraapi',
          2 => 'checkuser',
        ),
        'uses' => 'App\\Http\\Controllers\\IncorporadoraEnderecoController@index',
        'controller' => 'App\\Http\\Controllers\\IncorporadoraEnderecoController@index',
        'namespace' => NULL,
        'prefix' => 'api/incorporadora/endereco',
        'where' => 
        array (
        ),
        'as' => 'generated::AhbskqVpj9kpZSyh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::jOprHNpVD3oqecG4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/incorporadora/endereco/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:incorporadoraapi',
          2 => 'checkuser',
        ),
        'uses' => 'App\\Http\\Controllers\\IncorporadoraEnderecoController@show',
        'controller' => 'App\\Http\\Controllers\\IncorporadoraEnderecoController@show',
        'namespace' => NULL,
        'prefix' => 'api/incorporadora/endereco',
        'where' => 
        array (
        ),
        'as' => 'generated::jOprHNpVD3oqecG4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::YVti9YqhVN20U5Yo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/incorporadora/endereco/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:incorporadoraapi',
          2 => 'checkuser',
        ),
        'uses' => 'App\\Http\\Controllers\\IncorporadoraEnderecoController@create',
        'controller' => 'App\\Http\\Controllers\\IncorporadoraEnderecoController@create',
        'namespace' => NULL,
        'prefix' => 'api/incorporadora/endereco',
        'where' => 
        array (
        ),
        'as' => 'generated::YVti9YqhVN20U5Yo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0B6El1s665I47Bnt' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/incorporadora/endereco/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:incorporadoraapi',
          2 => 'checkuser',
        ),
        'uses' => 'App\\Http\\Controllers\\IncorporadoraEnderecoController@update',
        'controller' => 'App\\Http\\Controllers\\IncorporadoraEnderecoController@update',
        'namespace' => NULL,
        'prefix' => 'api/incorporadora/endereco',
        'where' => 
        array (
        ),
        'as' => 'generated::0B6El1s665I47Bnt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::VH3bj4CCqrL5aUQJ' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/incorporadora/endereco/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:incorporadoraapi',
          2 => 'checkuser',
        ),
        'uses' => 'App\\Http\\Controllers\\IncorporadoraEnderecoController@destroy',
        'controller' => 'App\\Http\\Controllers\\IncorporadoraEnderecoController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/incorporadora/endereco',
        'where' => 
        array (
        ),
        'as' => 'generated::VH3bj4CCqrL5aUQJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Zvr6pU4Ul0YH1FLg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/incorporadora/socio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:incorporadoraapi',
          2 => 'checkuser',
        ),
        'uses' => 'App\\Http\\Controllers\\SociosController@index',
        'controller' => 'App\\Http\\Controllers\\SociosController@index',
        'namespace' => NULL,
        'prefix' => 'api/incorporadora/socio',
        'where' => 
        array (
        ),
        'as' => 'generated::Zvr6pU4Ul0YH1FLg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::jsiOXxrAZOapbFAl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/incorporadora/socio/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:incorporadoraapi',
          2 => 'checkuser',
        ),
        'uses' => 'App\\Http\\Controllers\\SociosController@show',
        'controller' => 'App\\Http\\Controllers\\SociosController@show',
        'namespace' => NULL,
        'prefix' => 'api/incorporadora/socio',
        'where' => 
        array (
        ),
        'as' => 'generated::jsiOXxrAZOapbFAl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Mk8VE7xXQiawpyVo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/incorporadora/socio/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:incorporadoraapi',
          2 => 'checkuser',
        ),
        'uses' => 'App\\Http\\Controllers\\SociosController@create',
        'controller' => 'App\\Http\\Controllers\\SociosController@create',
        'namespace' => NULL,
        'prefix' => 'api/incorporadora/socio',
        'where' => 
        array (
        ),
        'as' => 'generated::Mk8VE7xXQiawpyVo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::n9gYY7sep5n6otCb' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/incorporadora/socio/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:incorporadoraapi',
          2 => 'checkuser',
        ),
        'uses' => 'App\\Http\\Controllers\\SociosController@update',
        'controller' => 'App\\Http\\Controllers\\SociosController@update',
        'namespace' => NULL,
        'prefix' => 'api/incorporadora/socio',
        'where' => 
        array (
        ),
        'as' => 'generated::n9gYY7sep5n6otCb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::gxYM4W2GctTJY5aT' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/incorporadora/socio/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:incorporadoraapi',
          2 => 'checkuser',
        ),
        'uses' => 'App\\Http\\Controllers\\SociosController@destroy',
        'controller' => 'App\\Http\\Controllers\\SociosController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/incorporadora/socio',
        'where' => 
        array (
        ),
        'as' => 'generated::gxYM4W2GctTJY5aT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MfXCyW2yQHDCVniB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/adm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthAdmController@index',
        'controller' => 'App\\Http\\Controllers\\AuthAdmController@index',
        'namespace' => NULL,
        'prefix' => 'api/adm',
        'where' => 
        array (
        ),
        'as' => 'generated::MfXCyW2yQHDCVniB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::rB91oK9e13FuayzE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/adm/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthAdmController@register',
        'controller' => 'App\\Http\\Controllers\\AuthAdmController@register',
        'namespace' => NULL,
        'prefix' => 'api/adm',
        'where' => 
        array (
        ),
        'as' => 'generated::rB91oK9e13FuayzE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5lqyzvcsPBlYRZPT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/adm/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthAdmController@login',
        'controller' => 'App\\Http\\Controllers\\AuthAdmController@login',
        'namespace' => NULL,
        'prefix' => 'api/adm',
        'where' => 
        array (
        ),
        'as' => 'generated::5lqyzvcsPBlYRZPT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XMfFIZMyylcTgjBt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/empreendimento/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:admapi',
        ),
        'uses' => 'App\\Http\\Controllers\\EmpreendimentoController@create',
        'controller' => 'App\\Http\\Controllers\\EmpreendimentoController@create',
        'namespace' => NULL,
        'prefix' => 'api/empreendimento',
        'where' => 
        array (
        ),
        'as' => 'generated::XMfFIZMyylcTgjBt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::KilYz3ADVu2FeqiW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":256:{@IG6sHs3heiQJ5e0b63mxLmmGYNWOHirNd8nd6LOO7NM=.a:5:{s:3:"use";a:0:{}s:8:"function";s:44:"function () {
    return \\view(\'welcome\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000002915ff440000000068dabb3a";}}',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::KilYz3ADVu2FeqiW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
  ),
)
);
