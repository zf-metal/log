# ZfMetal\Log

## Dependencies
- zendframework/zend-log
- zf-metal/commons

## Default path

proyectPath/logs

## Config

Add a file config (ex: zfmetal-log.global.php) in config/autoload.

```
$date = new \DateTime();
return[
    'zf-metal-log.options' => [
        'log_file' => './logs/' . $date->format('Y-m-d') . '.log',
        'filter' => \Zend\Log\Logger::INFO,
    ]
];
```


## Service Manager

`$container->get('zf-metal.log');`

OR

`$container->get(\ZfMetal\Log\Log::class);`

## Plugin Controller

`$this->logger()`

## Facade

`Logger::method();`

## Hot to use

- `$this->logger()->emerg($message);`
- `$this->logger()->alert($message);`
- `$this->logger()->crit($message);`
- `$this->logger()->err($message);`
- `$this->logger()->warn($message);`
- `$this->logger()->notice($message);`
- `$this->logger()->info($message);`
- `$this->logger()->debug($message);`

By Facade

- `Logger::emerg($message);`
- `Logger::alert($message);`
- `Logger::crit($message);`
- `Logger::err($message);`
- `Logger::warn($message);`
- `Logger::notice($message);`
- `Logger::info($message);`
- `Logger::debug($message);`
