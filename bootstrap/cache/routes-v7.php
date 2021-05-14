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
            '_route' => 'generated::QQZKc7iVGkQ2opK4',
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
      '/api/document/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SsNimDjRf0OBFRKq',
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
      '/api/document/check_sign' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nkwL83chd1XMKs8o',
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
      '/api/document/associar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KSmBUJYtipgwb19A',
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
            '_route' => 'generated::50MfCNfawc9kQBoz',
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
            '_route' => 'generated::WXUpFQZSkkWAuiAw',
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
            '_route' => 'generated::PMexXlgzBpdM8WPU',
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
            '_route' => 'generated::HlC22DvjNs4WGTCA',
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
            '_route' => 'generated::YBzsQUO7X5bI8M1w',
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
            '_route' => 'generated::6x1R3PJDu35bsz5L',
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
            '_route' => 'generated::feL7eWq1S3tnjXOR',
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
            '_route' => 'generated::fD5fpw1EOlzeQ9g0',
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
            '_route' => 'generated::dE5Kpi3IjPsWmKqY',
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
            '_route' => 'generated::qT41B3dompA1njK1',
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
            '_route' => 'generated::nb4zPwcMUpmEGXCH',
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
            '_route' => 'generated::3IhevgLc6EcfC9CU',
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
            '_route' => 'generated::d63iPKzHt7MEh588',
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
            '_route' => 'generated::Pby1I5lvl32X7jVx',
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
            '_route' => 'generated::o4E2uG5tCK0TwUAW',
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
            '_route' => 'generated::hf1b5qf0gZWaqj5x',
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
            '_route' => 'generated::6g0hYWZR99h1L2hT',
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
            '_route' => 'generated::2z3RIoEkXaLYkIrW',
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
            '_route' => 'generated::pciTuZisWk1mkXAl',
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
            '_route' => 'generated::7OERwRDhpJhNXN6H',
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
            '_route' => 'generated::jys83T9KB8AYYuhZ',
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
            '_route' => 'generated::Z1k1JLF5JaEnpDk0',
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
            '_route' => 'generated::nvBeXmBx1aM6p1EQ',
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
            '_route' => 'generated::UjolLc2l7am62Cgz',
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
      '/api/incorporadora/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lbmSRqrDIqIcrTiQ',
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
            '_route' => 'generated::JINOBVfpGJaeJ38R',
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
      '/api/incorporadora/me' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6hYlEYqz5QvNd7cq',
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
      '/api/incorporadora/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RXjIgNsSlwrg8MDt',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/incorporadora/empreendimentos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3l1Dinq8efFaHCbR',
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
            '_route' => 'generated::t8pB2cig0L1wPf0V',
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
            '_route' => 'generated::GePXCHOaPHQ7v3OA',
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
            '_route' => 'generated::no7VVZNFWYWTY1HG',
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
            '_route' => 'generated::YdTRrdIMaideJJfs',
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
            '_route' => 'generated::g56SgXYA5bs4OzeJ',
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
            '_route' => 'generated::Iwekc3rdGn7NGWVr',
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
            '_route' => 'generated::ckf9zc5OSHX6R39G',
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
            '_route' => 'generated::1pbnwdXVVt56ZC7v',
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
            '_route' => 'generated::Zy4p5JQw4SjAn134',
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
            '_route' => 'generated::0O9rvHa4cxQcAr8P',
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
            '_route' => 'generated::L6SyLJoTKkTY7hiM',
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
            '_route' => 'generated::Tp10qBpwjwoVBRLi',
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
            '_route' => 'generated::eWFohxI6NxOzBVi5',
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
            '_route' => 'generated::8BJtCZdtaWhEkkcr',
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
            '_route' => 'generated::fuH6l2bWQOYL6IGu',
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
            '_route' => 'generated::WDSwXYQSDBesxetH',
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
      '/api/teste' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qCtJYDuLG3DezH4j',
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
            '_route' => 'generated::HNUg3TTLpke8HyPP',
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
            '_route' => 'generated::Itd98FCg59Ki1FZT',
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
      0 => '{^(?|/oauth/(?|tokens/([^/]++)(*:32)|clients/([^/]++)(?|(*:58))|personal\\-access\\-tokens/([^/]++)(*:99))|/api/(?|in(?|vesti(?|mento/(?|show/([^/]++)(*:150)|update/([^/]++)(*:173)|destroy/([^/]++)(*:197))|dores/([^/]++)(*:220))|corporadora/(?|logo/(?|show/([^/]++)(*:265)|update/([^/]++)(*:288)|destroy/([^/]++)(*:312))|dados/(?|show/([^/]++)(*:343)|update/([^/]++)(*:366)|destroy/([^/]++)(*:390))|endereco/(?|show/([^/]++)(*:424)|update/([^/]++)(*:447)|destroy/([^/]++)(*:471))|socio/(?|show/([^/]++)(*:502)|update/([^/]++)(*:525)|destroy/([^/]++)(*:549))))|e(?|ndereco_(?|usuario/(?|show/([^/]++)(*:599)|update/([^/]++)(*:622)|destroy/([^/]++)(*:646))|incorporadora/(?|show/([^/]++)(*:685)|update/([^/]++)(*:708)|destroy/([^/]++)(*:732)))|mpreendimento/(?|update/([^/]++)(*:774)|destroy/([^/]++)(*:798)|s(?|how/([^/]++)(*:822)|lug/([^/]++)(*:842)))|stado_civil/(?|show/([^/]++)(*:880)|update/([^/]++)(*:903)|destroy/([^/]++)(*:927)))|banco/(?|show/([^/]++)(*:959)|update/([^/]++)(*:982)|destroy/([^/]++)(*:1006))|dados_bancarios/update/([^/]++)(*:1047)|foto_empreendimento/(?|update/([^/]++)(*:1094)|destroy/([^/]++)(*:1119))|teste/(?|show/([^/]++)(*:1151)|update/([^/]++)(*:1175)|destroy/([^/]++)(*:1200))))/?$}sDu',
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
      150 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ItOEmShV15NP5zeG',
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
      173 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KEthmA44fOZ77OIG',
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
      197 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p8KSMUq78i57DbLN',
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
      220 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NaGn96WgZwdWe2IS',
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
      265 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MudNxsacfIIGk4Yq',
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
      288 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::03kApUZRbgWynWOD',
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
      312 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wsfxFwNZimHJU031',
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
      343 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f0r40ct9SU5UBGl8',
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
      366 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5fJ4XqHTGKzIWtWC',
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
      390 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kjdtkjY3TXXd6bu0',
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
      424 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5Huyi2S44TJezYqP',
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
      447 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jTXy22VO4ilIuZqv',
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
      471 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5Za8LaSZFcpwQ0iX',
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
      502 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::43Gacq2cErd3Fuvm',
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
      525 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vGSC3TGH997URWoV',
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
      549 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EmZizCil4j983INp',
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
      599 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yGFA0YgDSUfEhgaT',
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
      622 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MbAKHa7ek0xvm6w8',
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
      646 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1X9B2I47soYj0Vxz',
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
      685 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JO5UraQEgrfyT7Bl',
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
      708 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::96AErVxL8Cutsqhn',
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
      732 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MSZ9di360GUvI1Xz',
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
      774 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8n8fTijqODVj9sXe',
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
      798 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YV1TqTt0uUYXIbOS',
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
      822 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mRWsd9wPHkcASYaH',
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
      842 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7KBBguAW9F36mgwk',
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
      880 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JWxTBPdlwjUU3GZB',
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
      903 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OXLAe7H5thsB12fS',
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
      927 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DglqGZxwoEWdqWI5',
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
      959 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::szHXM2mORFMuOHbe',
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
      982 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qxkct3oQsYlYeZ6S',
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
      1006 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DSK1wIN5XiOJeHMR',
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
      1047 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LeMZsQBdPHIzwf24',
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
      1094 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SutJiCxA2y2xcaTI',
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
      1119 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GViHS6iYDbEJQ3RR',
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
      1151 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fLvwSJOiMEfZujQM',
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
      1175 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rKrrddYYVX6jO5lh',
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
      1200 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FZOipuUXPc6bN5pB',
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
    'generated::QQZKc7iVGkQ2opK4' => 
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
        'uses' => 'App\\Http\\Controllers\\ValidateHookController@validateHooks',
        'controller' => 'App\\Http\\Controllers\\ValidateHookController@validateHooks',
        'namespace' => NULL,
        'prefix' => 'api/clicksign/hooks',
        'where' => 
        array (
        ),
        'as' => 'generated::QQZKc7iVGkQ2opK4',
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
    'generated::SsNimDjRf0OBFRKq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/document/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\DocumentController@create',
        'controller' => 'App\\Http\\Controllers\\DocumentController@create',
        'namespace' => NULL,
        'prefix' => 'api/document',
        'where' => 
        array (
        ),
        'as' => 'generated::SsNimDjRf0OBFRKq',
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
    'generated::nkwL83chd1XMKs8o' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/document/check_sign',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\SignDocumentController@checkSign',
        'controller' => 'App\\Http\\Controllers\\SignDocumentController@checkSign',
        'namespace' => NULL,
        'prefix' => 'api/document',
        'where' => 
        array (
        ),
        'as' => 'generated::nkwL83chd1XMKs8o',
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
    'generated::KSmBUJYtipgwb19A' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/document/associar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\SignDocumentController@associar',
        'controller' => 'App\\Http\\Controllers\\SignDocumentController@associar',
        'namespace' => NULL,
        'prefix' => 'api/document',
        'where' => 
        array (
        ),
        'as' => 'generated::KSmBUJYtipgwb19A',
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
    'generated::50MfCNfawc9kQBoz' => 
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
        'as' => 'generated::50MfCNfawc9kQBoz',
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
    'generated::WXUpFQZSkkWAuiAw' => 
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
        'as' => 'generated::WXUpFQZSkkWAuiAw',
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
    'generated::PMexXlgzBpdM8WPU' => 
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
        'as' => 'generated::PMexXlgzBpdM8WPU',
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
    'generated::ItOEmShV15NP5zeG' => 
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
        'as' => 'generated::ItOEmShV15NP5zeG',
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
    'generated::HlC22DvjNs4WGTCA' => 
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
        'as' => 'generated::HlC22DvjNs4WGTCA',
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
    'generated::KEthmA44fOZ77OIG' => 
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
        'as' => 'generated::KEthmA44fOZ77OIG',
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
    'generated::p8KSMUq78i57DbLN' => 
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
        'as' => 'generated::p8KSMUq78i57DbLN',
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
    'generated::YBzsQUO7X5bI8M1w' => 
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
        'as' => 'generated::YBzsQUO7X5bI8M1w',
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
    'generated::6x1R3PJDu35bsz5L' => 
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
        'as' => 'generated::6x1R3PJDu35bsz5L',
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
    'generated::yGFA0YgDSUfEhgaT' => 
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
        'as' => 'generated::yGFA0YgDSUfEhgaT',
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
    'generated::feL7eWq1S3tnjXOR' => 
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
        'as' => 'generated::feL7eWq1S3tnjXOR',
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
    'generated::MbAKHa7ek0xvm6w8' => 
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
        'as' => 'generated::MbAKHa7ek0xvm6w8',
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
    'generated::1X9B2I47soYj0Vxz' => 
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
        'as' => 'generated::1X9B2I47soYj0Vxz',
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
    'generated::NaGn96WgZwdWe2IS' => 
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
        'as' => 'generated::NaGn96WgZwdWe2IS',
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
    'generated::8n8fTijqODVj9sXe' => 
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
        'as' => 'generated::8n8fTijqODVj9sXe',
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
    'generated::YV1TqTt0uUYXIbOS' => 
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
        'as' => 'generated::YV1TqTt0uUYXIbOS',
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
    'generated::fD5fpw1EOlzeQ9g0' => 
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
        'as' => 'generated::fD5fpw1EOlzeQ9g0',
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
    'generated::JWxTBPdlwjUU3GZB' => 
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
        'as' => 'generated::JWxTBPdlwjUU3GZB',
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
    'generated::dE5Kpi3IjPsWmKqY' => 
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
        'as' => 'generated::dE5Kpi3IjPsWmKqY',
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
    'generated::OXLAe7H5thsB12fS' => 
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
        'as' => 'generated::OXLAe7H5thsB12fS',
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
    'generated::DglqGZxwoEWdqWI5' => 
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
        'as' => 'generated::DglqGZxwoEWdqWI5',
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
    'generated::qT41B3dompA1njK1' => 
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
        'as' => 'generated::qT41B3dompA1njK1',
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
    'generated::szHXM2mORFMuOHbe' => 
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
        'as' => 'generated::szHXM2mORFMuOHbe',
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
    'generated::nb4zPwcMUpmEGXCH' => 
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
        'as' => 'generated::nb4zPwcMUpmEGXCH',
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
    'generated::qxkct3oQsYlYeZ6S' => 
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
        'as' => 'generated::qxkct3oQsYlYeZ6S',
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
    'generated::DSK1wIN5XiOJeHMR' => 
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
        'as' => 'generated::DSK1wIN5XiOJeHMR',
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
    'generated::3IhevgLc6EcfC9CU' => 
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
        'as' => 'generated::3IhevgLc6EcfC9CU',
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
    'generated::d63iPKzHt7MEh588' => 
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
        'as' => 'generated::d63iPKzHt7MEh588',
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
    'generated::LeMZsQBdPHIzwf24' => 
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
        'as' => 'generated::LeMZsQBdPHIzwf24',
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
    'generated::Pby1I5lvl32X7jVx' => 
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
        'as' => 'generated::Pby1I5lvl32X7jVx',
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
    'generated::o4E2uG5tCK0TwUAW' => 
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
        'as' => 'generated::o4E2uG5tCK0TwUAW',
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
    'generated::hf1b5qf0gZWaqj5x' => 
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
        'as' => 'generated::hf1b5qf0gZWaqj5x',
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
    'generated::6g0hYWZR99h1L2hT' => 
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
        'as' => 'generated::6g0hYWZR99h1L2hT',
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
    'generated::2z3RIoEkXaLYkIrW' => 
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
        'as' => 'generated::2z3RIoEkXaLYkIrW',
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
    'generated::pciTuZisWk1mkXAl' => 
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
        'as' => 'generated::pciTuZisWk1mkXAl',
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
    'generated::7OERwRDhpJhNXN6H' => 
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
        'as' => 'generated::7OERwRDhpJhNXN6H',
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
    'generated::jys83T9KB8AYYuhZ' => 
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
        'as' => 'generated::jys83T9KB8AYYuhZ',
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
    'generated::mRWsd9wPHkcASYaH' => 
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
        'as' => 'generated::mRWsd9wPHkcASYaH',
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
    'generated::7KBBguAW9F36mgwk' => 
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
        'as' => 'generated::7KBBguAW9F36mgwk',
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
    'generated::Z1k1JLF5JaEnpDk0' => 
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
        'as' => 'generated::Z1k1JLF5JaEnpDk0',
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
    'generated::nvBeXmBx1aM6p1EQ' => 
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
        'as' => 'generated::nvBeXmBx1aM6p1EQ',
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
    'generated::UjolLc2l7am62Cgz' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\IncorporadoraController@index',
        'controller' => 'App\\Http\\Controllers\\IncorporadoraController@index',
        'namespace' => NULL,
        'prefix' => 'api/incorporadora',
        'where' => 
        array (
        ),
        'as' => 'generated::UjolLc2l7am62Cgz',
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
    'generated::lbmSRqrDIqIcrTiQ' => 
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
        'as' => 'generated::lbmSRqrDIqIcrTiQ',
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
    'generated::JINOBVfpGJaeJ38R' => 
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
        'as' => 'generated::JINOBVfpGJaeJ38R',
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
    'generated::6hYlEYqz5QvNd7cq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/incorporadora/me',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:incorporadoraapi',
          2 => 'checkuser',
        ),
        'uses' => 'App\\Http\\Controllers\\IncorporadoraController@me',
        'controller' => 'App\\Http\\Controllers\\IncorporadoraController@me',
        'namespace' => NULL,
        'prefix' => 'api/incorporadora',
        'where' => 
        array (
        ),
        'as' => 'generated::6hYlEYqz5QvNd7cq',
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
    'generated::RXjIgNsSlwrg8MDt' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/incorporadora/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:incorporadoraapi',
          2 => 'checkuser',
        ),
        'uses' => 'App\\Http\\Controllers\\IncorporadoraController@update',
        'controller' => 'App\\Http\\Controllers\\IncorporadoraController@update',
        'namespace' => NULL,
        'prefix' => 'api/incorporadora',
        'where' => 
        array (
        ),
        'as' => 'generated::RXjIgNsSlwrg8MDt',
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
    'generated::3l1Dinq8efFaHCbR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/incorporadora/empreendimentos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:incorporadoraapi',
          2 => 'checkuser',
        ),
        'uses' => 'App\\Http\\Controllers\\IncorporadoraController@getEmpreendimentos',
        'controller' => 'App\\Http\\Controllers\\IncorporadoraController@getEmpreendimentos',
        'namespace' => NULL,
        'prefix' => 'api/incorporadora',
        'where' => 
        array (
        ),
        'as' => 'generated::3l1Dinq8efFaHCbR',
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
    'generated::t8pB2cig0L1wPf0V' => 
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
        'as' => 'generated::t8pB2cig0L1wPf0V',
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
    'generated::MudNxsacfIIGk4Yq' => 
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
        'as' => 'generated::MudNxsacfIIGk4Yq',
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
    'generated::GePXCHOaPHQ7v3OA' => 
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
        'as' => 'generated::GePXCHOaPHQ7v3OA',
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
    'generated::03kApUZRbgWynWOD' => 
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
        'as' => 'generated::03kApUZRbgWynWOD',
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
    'generated::wsfxFwNZimHJU031' => 
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
        'as' => 'generated::wsfxFwNZimHJU031',
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
    'generated::no7VVZNFWYWTY1HG' => 
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
        'as' => 'generated::no7VVZNFWYWTY1HG',
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
    'generated::f0r40ct9SU5UBGl8' => 
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
        'as' => 'generated::f0r40ct9SU5UBGl8',
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
    'generated::YdTRrdIMaideJJfs' => 
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
        'as' => 'generated::YdTRrdIMaideJJfs',
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
    'generated::5fJ4XqHTGKzIWtWC' => 
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
        'as' => 'generated::5fJ4XqHTGKzIWtWC',
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
    'generated::kjdtkjY3TXXd6bu0' => 
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
        'as' => 'generated::kjdtkjY3TXXd6bu0',
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
    'generated::g56SgXYA5bs4OzeJ' => 
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
        'as' => 'generated::g56SgXYA5bs4OzeJ',
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
    'generated::5Huyi2S44TJezYqP' => 
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
        'as' => 'generated::5Huyi2S44TJezYqP',
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
    'generated::Iwekc3rdGn7NGWVr' => 
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
        'as' => 'generated::Iwekc3rdGn7NGWVr',
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
    'generated::jTXy22VO4ilIuZqv' => 
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
        'as' => 'generated::jTXy22VO4ilIuZqv',
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
    'generated::5Za8LaSZFcpwQ0iX' => 
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
        'as' => 'generated::5Za8LaSZFcpwQ0iX',
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
    'generated::ckf9zc5OSHX6R39G' => 
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
        'as' => 'generated::ckf9zc5OSHX6R39G',
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
    'generated::43Gacq2cErd3Fuvm' => 
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
        'as' => 'generated::43Gacq2cErd3Fuvm',
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
    'generated::1pbnwdXVVt56ZC7v' => 
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
        'as' => 'generated::1pbnwdXVVt56ZC7v',
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
    'generated::vGSC3TGH997URWoV' => 
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
        'as' => 'generated::vGSC3TGH997URWoV',
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
    'generated::EmZizCil4j983INp' => 
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
        'as' => 'generated::EmZizCil4j983INp',
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
    'generated::Zy4p5JQw4SjAn134' => 
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
        'as' => 'generated::Zy4p5JQw4SjAn134',
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
    'generated::0O9rvHa4cxQcAr8P' => 
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
        'as' => 'generated::0O9rvHa4cxQcAr8P',
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
    'generated::L6SyLJoTKkTY7hiM' => 
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
        'as' => 'generated::L6SyLJoTKkTY7hiM',
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
    'generated::Tp10qBpwjwoVBRLi' => 
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
        'as' => 'generated::Tp10qBpwjwoVBRLi',
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
    'generated::eWFohxI6NxOzBVi5' => 
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
          1 => 'auth:admapi',
        ),
        'uses' => 'App\\Http\\Controllers\\FotoEmpreendimentoController@index',
        'controller' => 'App\\Http\\Controllers\\FotoEmpreendimentoController@index',
        'namespace' => NULL,
        'prefix' => 'api/foto_empreendimento',
        'where' => 
        array (
        ),
        'as' => 'generated::eWFohxI6NxOzBVi5',
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
    'generated::8BJtCZdtaWhEkkcr' => 
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
          1 => 'auth:admapi',
        ),
        'uses' => 'App\\Http\\Controllers\\FotoEmpreendimentoController@create',
        'controller' => 'App\\Http\\Controllers\\FotoEmpreendimentoController@create',
        'namespace' => NULL,
        'prefix' => 'api/foto_empreendimento',
        'where' => 
        array (
        ),
        'as' => 'generated::8BJtCZdtaWhEkkcr',
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
    'generated::SutJiCxA2y2xcaTI' => 
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
          1 => 'auth:admapi',
        ),
        'uses' => 'App\\Http\\Controllers\\FotoEmpreendimentoController@update',
        'controller' => 'App\\Http\\Controllers\\FotoEmpreendimentoController@update',
        'namespace' => NULL,
        'prefix' => 'api/foto_empreendimento',
        'where' => 
        array (
        ),
        'as' => 'generated::SutJiCxA2y2xcaTI',
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
    'generated::GViHS6iYDbEJQ3RR' => 
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
          1 => 'auth:admapi',
        ),
        'uses' => 'App\\Http\\Controllers\\FotoEmpreendimentoController@destroy',
        'controller' => 'App\\Http\\Controllers\\FotoEmpreendimentoController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/foto_empreendimento',
        'where' => 
        array (
        ),
        'as' => 'generated::GViHS6iYDbEJQ3RR',
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
    'generated::fuH6l2bWQOYL6IGu' => 
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
          1 => 'auth:admapi',
        ),
        'uses' => 'App\\Http\\Controllers\\EnderecoIncorporadoraController@index',
        'controller' => 'App\\Http\\Controllers\\EnderecoIncorporadoraController@index',
        'namespace' => NULL,
        'prefix' => 'api/endereco_incorporadora',
        'where' => 
        array (
        ),
        'as' => 'generated::fuH6l2bWQOYL6IGu',
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
    'generated::JO5UraQEgrfyT7Bl' => 
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
          1 => 'auth:admapi',
        ),
        'uses' => 'App\\Http\\Controllers\\EnderecoIncorporadoraController@show',
        'controller' => 'App\\Http\\Controllers\\EnderecoIncorporadoraController@show',
        'namespace' => NULL,
        'prefix' => 'api/endereco_incorporadora',
        'where' => 
        array (
        ),
        'as' => 'generated::JO5UraQEgrfyT7Bl',
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
    'generated::WDSwXYQSDBesxetH' => 
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
          1 => 'auth:admapi',
        ),
        'uses' => 'App\\Http\\Controllers\\EnderecoIncorporadoraController@create',
        'controller' => 'App\\Http\\Controllers\\EnderecoIncorporadoraController@create',
        'namespace' => NULL,
        'prefix' => 'api/endereco_incorporadora',
        'where' => 
        array (
        ),
        'as' => 'generated::WDSwXYQSDBesxetH',
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
    'generated::96AErVxL8Cutsqhn' => 
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
          1 => 'auth:admapi',
        ),
        'uses' => 'App\\Http\\Controllers\\EnderecoIncorporadoraController@update',
        'controller' => 'App\\Http\\Controllers\\EnderecoIncorporadoraController@update',
        'namespace' => NULL,
        'prefix' => 'api/endereco_incorporadora',
        'where' => 
        array (
        ),
        'as' => 'generated::96AErVxL8Cutsqhn',
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
    'generated::MSZ9di360GUvI1Xz' => 
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
          1 => 'auth:admapi',
        ),
        'uses' => 'App\\Http\\Controllers\\EnderecoIncorporadoraController@destroy',
        'controller' => 'App\\Http\\Controllers\\EnderecoIncorporadoraController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/endereco_incorporadora',
        'where' => 
        array (
        ),
        'as' => 'generated::MSZ9di360GUvI1Xz',
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
    'generated::qCtJYDuLG3DezH4j' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/teste',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\TesteController@index',
        'controller' => 'App\\Http\\Controllers\\TesteController@index',
        'namespace' => NULL,
        'prefix' => 'api/teste',
        'where' => 
        array (
        ),
        'as' => 'generated::qCtJYDuLG3DezH4j',
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
    'generated::fLvwSJOiMEfZujQM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/teste/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\TesteController@show',
        'controller' => 'App\\Http\\Controllers\\TesteController@show',
        'namespace' => NULL,
        'prefix' => 'api/teste',
        'where' => 
        array (
        ),
        'as' => 'generated::fLvwSJOiMEfZujQM',
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
    'generated::HNUg3TTLpke8HyPP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/teste',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\TesteController@create',
        'controller' => 'App\\Http\\Controllers\\TesteController@create',
        'namespace' => NULL,
        'prefix' => 'api/teste',
        'where' => 
        array (
        ),
        'as' => 'generated::HNUg3TTLpke8HyPP',
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
    'generated::rKrrddYYVX6jO5lh' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/teste/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\TesteController@update',
        'controller' => 'App\\Http\\Controllers\\TesteController@update',
        'namespace' => NULL,
        'prefix' => 'api/teste',
        'where' => 
        array (
        ),
        'as' => 'generated::rKrrddYYVX6jO5lh',
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
    'generated::FZOipuUXPc6bN5pB' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/teste/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\TesteController@destroy',
        'controller' => 'App\\Http\\Controllers\\TesteController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/teste',
        'where' => 
        array (
        ),
        'as' => 'generated::FZOipuUXPc6bN5pB',
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
    'generated::Itd98FCg59Ki1FZT' => 
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
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":256:{@PZD0mclq8IrYJ3IMywbmo2mQiTwHmTlUs6N+UXcBnks=.a:5:{s:3:"use";a:0:{}s:8:"function";s:44:"function () {
    return \\view(\'welcome\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000699a6b7e00000000270f7107";}}',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::Itd98FCg59Ki1FZT',
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
