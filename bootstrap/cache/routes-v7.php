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
            '_route' => 'generated::5Oge2H8TCbT0nOOe',
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
            '_route' => 'generated::j6g2wDY1MNP8cPDm',
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
            '_route' => 'generated::fUMzlTGOIgMzTRs8',
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
            '_route' => 'generated::tuob9MrdQ1FEWLu2',
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
            '_route' => 'generated::RQ5JoIBH0YXLwQ51',
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
            '_route' => 'generated::L9G9RRtlMSqz2ECT',
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
            '_route' => 'generated::yTAHSWcptOanWYw6',
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
            '_route' => 'generated::TXodIihRsYPNQqIZ',
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
            '_route' => 'generated::6Ym3K8ekex4oYDVt',
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
            '_route' => 'generated::nhUoNRC0ZkIT5NrD',
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
            '_route' => 'generated::yb6Mj1J1eT3xxjuL',
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
            '_route' => 'generated::HzSxF8PORB6RGFUj',
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
            '_route' => 'generated::YZj4sEcYTvMhPTa2',
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
            '_route' => 'generated::rGqzbakcJXUWgX58',
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
            '_route' => 'generated::BXzslNPoeYkDm4OR',
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
            '_route' => 'generated::gkAqUmmRJnV04xCY',
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
            '_route' => 'generated::RxqoCBGk0OS83TQs',
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
            '_route' => 'generated::RxXLAuR09BoF6lV6',
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
            '_route' => 'generated::R8WDgkA3K1CnwD5T',
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
            '_route' => 'generated::pk6lAFxYtm3Pt8Dq',
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
            '_route' => 'generated::xUFwCp2iQjzt3tlO',
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
            '_route' => 'generated::tEXlqYlghMkuv6rX',
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
            '_route' => 'generated::HwknCTC3WdadKo8g',
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
            '_route' => 'generated::pr3KJJkBMDwulIAY',
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
            '_route' => 'generated::jVjPboIdMAmPjwUS',
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
            '_route' => 'generated::XfniqiCoJci8S1gy',
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
            '_route' => 'generated::54tT4UCSFrpOXgXG',
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
            '_route' => 'generated::pC2iEM8DqHuU9aAe',
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
            '_route' => 'generated::GWT4wwUGjTT5gD5f',
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
            '_route' => 'generated::KlDMQYLDp9spYspm',
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
            '_route' => 'generated::QNvFLJidJQN8bpbT',
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
            '_route' => 'generated::ZVYQMpMtqs1dOkCo',
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
            '_route' => 'generated::QHTnGIulpe3JSXYi',
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
            '_route' => 'generated::EWDgFRE0vo53jnXR',
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
            '_route' => 'generated::wSu1qMznUuOH3izf',
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
            '_route' => 'generated::WLXPRPkX36KQXmTt',
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
            '_route' => 'generated::psRtNLrWezAlsdXU',
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
            '_route' => 'generated::RfR6n9OT3x4AABcu',
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
            '_route' => 'generated::QolbqJabrU6C3DUN',
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
            '_route' => 'generated::hJ4DFCjelO8ELB5I',
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
            '_route' => 'generated::a8ozDvkd1hjWuagK',
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
            '_route' => 'generated::vQ6z8jQGwo6SUJBy',
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
            '_route' => 'generated::cbnWLYzoyOa1ehX5',
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
            '_route' => 'generated::K1RYHSxUIzvmdP7n',
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
            '_route' => 'generated::ahetdhOq6AiOW5Fj',
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
            '_route' => 'generated::UBu1PzEjaopG7Ovx',
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
            '_route' => 'generated::iQErtCNepBUZ6QhA',
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
            '_route' => 'generated::UnxiQGtIUqT2CYGK',
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
            '_route' => 'generated::eVdYZwBdIogoPzqi',
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
            '_route' => 'generated::8Xkk1hzGZf5FmOAX',
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
            '_route' => 'generated::lF4at42HKePD4Tyu',
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
            '_route' => 'generated::ZMJz1olPZp0DHvGB',
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
            '_route' => 'generated::Ogc1YzQfN49NSagd',
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
            '_route' => 'generated::53lSS0TCHRGoaMOW',
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
            '_route' => 'generated::5uRrveUtrPH0WQcY',
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
            '_route' => 'generated::l5uIsFJA52KBnq0c',
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
            '_route' => 'generated::jqPFhfHeZflozBQz',
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
            '_route' => 'generated::CHlC4vq4GshAGAVA',
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
            '_route' => 'generated::xfaYzUBJi22ji5jl',
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
            '_route' => 'generated::uZ5LR1VNB1oc9bAA',
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
            '_route' => 'generated::vHHYIVPVj5BD7KBZ',
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
            '_route' => 'generated::4PiGb6KDFcJuz7nV',
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
            '_route' => 'generated::c8utOmTYQlwB4vSG',
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
            '_route' => 'generated::0zUUmaV8TrQjvkVG',
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
            '_route' => 'generated::2e6UdxHjhMfaHtoD',
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
            '_route' => 'generated::bUEWA2vClpjrmjS5',
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
            '_route' => 'generated::yFml6phF4WhJ7muD',
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
            '_route' => 'generated::uPgO0qL62ovesFyZ',
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
            '_route' => 'generated::Zn4xDpPEvI5qfN1k',
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
            '_route' => 'generated::BQmWrLjGarAZyIc5',
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
            '_route' => 'generated::zycAJ5Y94kuEfrQM',
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
            '_route' => 'generated::g6lWYldhMFJe2p6G',
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
            '_route' => 'generated::peemaWiFg62nTmmn',
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
            '_route' => 'generated::1FRKXMmF3F0XwFzS',
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
            '_route' => 'generated::GQ21aNNiY9qA80kf',
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
            '_route' => 'generated::vjgFWDXxI6TVuJOK',
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
            '_route' => 'generated::KIDhKBhqxxKvX8Qp',
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
            '_route' => 'generated::tDbkiPcWnkD9csHo',
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
            '_route' => 'generated::UZOlwjVLu5x5lmyu',
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
            '_route' => 'generated::2ByGVluZT16fZpVU',
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
            '_route' => 'generated::beQRZdSlVqRfz4jk',
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
            '_route' => 'generated::AU8DLo0OVhu6SO6O',
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
            '_route' => 'generated::atJVCExsabqG2DQh',
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
            '_route' => 'generated::oHxqXetybDVN942x',
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
            '_route' => 'generated::OcOytCA0Tp2nvXiY',
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
            '_route' => 'generated::hU5GF4JiUjE1TefC',
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
            '_route' => 'generated::ck9pxSnwK0pITk2t',
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
            '_route' => 'generated::4KQ13rn2nCzVSh04',
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
            '_route' => 'generated::lDXqeM38UQZfFKPh',
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
            '_route' => 'generated::BfsGOvAWBq3ER2AP',
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
    'generated::5Oge2H8TCbT0nOOe' => 
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
        'as' => 'generated::5Oge2H8TCbT0nOOe',
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
    'generated::j6g2wDY1MNP8cPDm' => 
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
        'as' => 'generated::j6g2wDY1MNP8cPDm',
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
    'generated::fUMzlTGOIgMzTRs8' => 
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
        'as' => 'generated::fUMzlTGOIgMzTRs8',
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
    'generated::tuob9MrdQ1FEWLu2' => 
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
        'as' => 'generated::tuob9MrdQ1FEWLu2',
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
    'generated::RQ5JoIBH0YXLwQ51' => 
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
        'as' => 'generated::RQ5JoIBH0YXLwQ51',
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
    'generated::L9G9RRtlMSqz2ECT' => 
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
        'as' => 'generated::L9G9RRtlMSqz2ECT',
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
    'generated::yTAHSWcptOanWYw6' => 
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
        'as' => 'generated::yTAHSWcptOanWYw6',
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
    'generated::Ogc1YzQfN49NSagd' => 
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
        'as' => 'generated::Ogc1YzQfN49NSagd',
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
    'generated::TXodIihRsYPNQqIZ' => 
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
        'as' => 'generated::TXodIihRsYPNQqIZ',
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
    'generated::53lSS0TCHRGoaMOW' => 
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
        'as' => 'generated::53lSS0TCHRGoaMOW',
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
    'generated::5uRrveUtrPH0WQcY' => 
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
        'as' => 'generated::5uRrveUtrPH0WQcY',
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
    'generated::6Ym3K8ekex4oYDVt' => 
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
        'as' => 'generated::6Ym3K8ekex4oYDVt',
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
    'generated::nhUoNRC0ZkIT5NrD' => 
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
        'as' => 'generated::nhUoNRC0ZkIT5NrD',
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
    'generated::Zn4xDpPEvI5qfN1k' => 
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
        'as' => 'generated::Zn4xDpPEvI5qfN1k',
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
    'generated::yb6Mj1J1eT3xxjuL' => 
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
        'as' => 'generated::yb6Mj1J1eT3xxjuL',
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
    'generated::BQmWrLjGarAZyIc5' => 
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
        'as' => 'generated::BQmWrLjGarAZyIc5',
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
    'generated::zycAJ5Y94kuEfrQM' => 
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
        'as' => 'generated::zycAJ5Y94kuEfrQM',
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
    'generated::l5uIsFJA52KBnq0c' => 
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
        'as' => 'generated::l5uIsFJA52KBnq0c',
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
    'generated::GQ21aNNiY9qA80kf' => 
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
        'as' => 'generated::GQ21aNNiY9qA80kf',
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
    'generated::vjgFWDXxI6TVuJOK' => 
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
        'as' => 'generated::vjgFWDXxI6TVuJOK',
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
    'generated::HzSxF8PORB6RGFUj' => 
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
        'as' => 'generated::HzSxF8PORB6RGFUj',
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
    'generated::UZOlwjVLu5x5lmyu' => 
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
        'as' => 'generated::UZOlwjVLu5x5lmyu',
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
    'generated::YZj4sEcYTvMhPTa2' => 
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
        'as' => 'generated::YZj4sEcYTvMhPTa2',
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
    'generated::2ByGVluZT16fZpVU' => 
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
        'as' => 'generated::2ByGVluZT16fZpVU',
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
    'generated::beQRZdSlVqRfz4jk' => 
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
        'as' => 'generated::beQRZdSlVqRfz4jk',
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
    'generated::rGqzbakcJXUWgX58' => 
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
        'as' => 'generated::rGqzbakcJXUWgX58',
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
    'generated::AU8DLo0OVhu6SO6O' => 
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
        'as' => 'generated::AU8DLo0OVhu6SO6O',
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
    'generated::BXzslNPoeYkDm4OR' => 
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
        'as' => 'generated::BXzslNPoeYkDm4OR',
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
    'generated::atJVCExsabqG2DQh' => 
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
        'as' => 'generated::atJVCExsabqG2DQh',
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
    'generated::oHxqXetybDVN942x' => 
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
        'as' => 'generated::oHxqXetybDVN942x',
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
    'generated::gkAqUmmRJnV04xCY' => 
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
        'as' => 'generated::gkAqUmmRJnV04xCY',
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
    'generated::RxqoCBGk0OS83TQs' => 
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
        'as' => 'generated::RxqoCBGk0OS83TQs',
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
    'generated::OcOytCA0Tp2nvXiY' => 
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
        'as' => 'generated::OcOytCA0Tp2nvXiY',
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
    'generated::RxXLAuR09BoF6lV6' => 
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
        'as' => 'generated::RxXLAuR09BoF6lV6',
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
    'generated::R8WDgkA3K1CnwD5T' => 
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
        'as' => 'generated::R8WDgkA3K1CnwD5T',
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
    'generated::pk6lAFxYtm3Pt8Dq' => 
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
        'as' => 'generated::pk6lAFxYtm3Pt8Dq',
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
    'generated::xUFwCp2iQjzt3tlO' => 
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
        'as' => 'generated::xUFwCp2iQjzt3tlO',
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
    'generated::tEXlqYlghMkuv6rX' => 
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
        'as' => 'generated::tEXlqYlghMkuv6rX',
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
    'generated::HwknCTC3WdadKo8g' => 
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
        'as' => 'generated::HwknCTC3WdadKo8g',
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
    'generated::pr3KJJkBMDwulIAY' => 
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
        'as' => 'generated::pr3KJJkBMDwulIAY',
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
    'generated::jVjPboIdMAmPjwUS' => 
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
        'as' => 'generated::jVjPboIdMAmPjwUS',
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
    'generated::KIDhKBhqxxKvX8Qp' => 
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
        'as' => 'generated::KIDhKBhqxxKvX8Qp',
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
    'generated::tDbkiPcWnkD9csHo' => 
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
        'as' => 'generated::tDbkiPcWnkD9csHo',
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
    'generated::XfniqiCoJci8S1gy' => 
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
        'as' => 'generated::XfniqiCoJci8S1gy',
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
    'generated::54tT4UCSFrpOXgXG' => 
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
        'as' => 'generated::54tT4UCSFrpOXgXG',
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
    'generated::pC2iEM8DqHuU9aAe' => 
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
        'as' => 'generated::pC2iEM8DqHuU9aAe',
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
    'generated::GWT4wwUGjTT5gD5f' => 
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
        'as' => 'generated::GWT4wwUGjTT5gD5f',
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
    'generated::KlDMQYLDp9spYspm' => 
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
        'as' => 'generated::KlDMQYLDp9spYspm',
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
    'generated::QNvFLJidJQN8bpbT' => 
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
        'as' => 'generated::QNvFLJidJQN8bpbT',
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
    'generated::ZVYQMpMtqs1dOkCo' => 
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
        'as' => 'generated::ZVYQMpMtqs1dOkCo',
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
    'generated::QHTnGIulpe3JSXYi' => 
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
        'as' => 'generated::QHTnGIulpe3JSXYi',
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
    'generated::EWDgFRE0vo53jnXR' => 
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
        'as' => 'generated::EWDgFRE0vo53jnXR',
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
    'generated::jqPFhfHeZflozBQz' => 
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
        'as' => 'generated::jqPFhfHeZflozBQz',
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
    'generated::wSu1qMznUuOH3izf' => 
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
        'as' => 'generated::wSu1qMznUuOH3izf',
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
    'generated::CHlC4vq4GshAGAVA' => 
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
        'as' => 'generated::CHlC4vq4GshAGAVA',
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
    'generated::xfaYzUBJi22ji5jl' => 
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
        'as' => 'generated::xfaYzUBJi22ji5jl',
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
    'generated::WLXPRPkX36KQXmTt' => 
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
        'as' => 'generated::WLXPRPkX36KQXmTt',
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
    'generated::uZ5LR1VNB1oc9bAA' => 
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
        'as' => 'generated::uZ5LR1VNB1oc9bAA',
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
    'generated::psRtNLrWezAlsdXU' => 
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
        'as' => 'generated::psRtNLrWezAlsdXU',
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
    'generated::vHHYIVPVj5BD7KBZ' => 
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
        'as' => 'generated::vHHYIVPVj5BD7KBZ',
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
    'generated::4PiGb6KDFcJuz7nV' => 
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
        'as' => 'generated::4PiGb6KDFcJuz7nV',
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
    'generated::RfR6n9OT3x4AABcu' => 
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
        'as' => 'generated::RfR6n9OT3x4AABcu',
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
    'generated::c8utOmTYQlwB4vSG' => 
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
        'as' => 'generated::c8utOmTYQlwB4vSG',
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
    'generated::QolbqJabrU6C3DUN' => 
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
        'as' => 'generated::QolbqJabrU6C3DUN',
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
    'generated::0zUUmaV8TrQjvkVG' => 
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
        'as' => 'generated::0zUUmaV8TrQjvkVG',
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
    'generated::2e6UdxHjhMfaHtoD' => 
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
        'as' => 'generated::2e6UdxHjhMfaHtoD',
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
    'generated::hJ4DFCjelO8ELB5I' => 
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
        'as' => 'generated::hJ4DFCjelO8ELB5I',
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
    'generated::bUEWA2vClpjrmjS5' => 
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
        'as' => 'generated::bUEWA2vClpjrmjS5',
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
    'generated::a8ozDvkd1hjWuagK' => 
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
        'as' => 'generated::a8ozDvkd1hjWuagK',
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
    'generated::yFml6phF4WhJ7muD' => 
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
        'as' => 'generated::yFml6phF4WhJ7muD',
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
    'generated::uPgO0qL62ovesFyZ' => 
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
        'as' => 'generated::uPgO0qL62ovesFyZ',
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
    'generated::vQ6z8jQGwo6SUJBy' => 
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
        'as' => 'generated::vQ6z8jQGwo6SUJBy',
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
    'generated::cbnWLYzoyOa1ehX5' => 
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
        'as' => 'generated::cbnWLYzoyOa1ehX5',
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
    'generated::K1RYHSxUIzvmdP7n' => 
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
        'as' => 'generated::K1RYHSxUIzvmdP7n',
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
    'generated::ahetdhOq6AiOW5Fj' => 
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
        'as' => 'generated::ahetdhOq6AiOW5Fj',
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
    'generated::UBu1PzEjaopG7Ovx' => 
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
        'as' => 'generated::UBu1PzEjaopG7Ovx',
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
    'generated::iQErtCNepBUZ6QhA' => 
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
        'as' => 'generated::iQErtCNepBUZ6QhA',
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
    'generated::hU5GF4JiUjE1TefC' => 
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
        'as' => 'generated::hU5GF4JiUjE1TefC',
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
    'generated::ck9pxSnwK0pITk2t' => 
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
        'as' => 'generated::ck9pxSnwK0pITk2t',
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
    'generated::UnxiQGtIUqT2CYGK' => 
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
        'as' => 'generated::UnxiQGtIUqT2CYGK',
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
    'generated::g6lWYldhMFJe2p6G' => 
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
        'as' => 'generated::g6lWYldhMFJe2p6G',
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
    'generated::eVdYZwBdIogoPzqi' => 
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
        'as' => 'generated::eVdYZwBdIogoPzqi',
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
    'generated::peemaWiFg62nTmmn' => 
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
        'as' => 'generated::peemaWiFg62nTmmn',
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
    'generated::1FRKXMmF3F0XwFzS' => 
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
        'as' => 'generated::1FRKXMmF3F0XwFzS',
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
    'generated::8Xkk1hzGZf5FmOAX' => 
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
        'as' => 'generated::8Xkk1hzGZf5FmOAX',
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
    'generated::4KQ13rn2nCzVSh04' => 
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
        'as' => 'generated::4KQ13rn2nCzVSh04',
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
    'generated::lF4at42HKePD4Tyu' => 
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
        'as' => 'generated::lF4at42HKePD4Tyu',
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
    'generated::lDXqeM38UQZfFKPh' => 
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
        'as' => 'generated::lDXqeM38UQZfFKPh',
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
    'generated::BfsGOvAWBq3ER2AP' => 
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
        'as' => 'generated::BfsGOvAWBq3ER2AP',
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
    'generated::ZMJz1olPZp0DHvGB' => 
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
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":256:{@cjkEYvW84ekh+O/hk0SnmXusBQ3AUEW03CTSSwq9eGM=.a:5:{s:3:"use";a:0:{}s:8:"function";s:44:"function () {
    return \\view(\'welcome\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000ce7271e00000000383afdf0";}}',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::ZMJz1olPZp0DHvGB',
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
