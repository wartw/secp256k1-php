# secp256k1-php

PHP8 OK
  
### To Install:

libsecp256k1:
```
    git clone https://github.com/bitcoin-core/secp256k1.git && \
    cd secp256k1 &&                                    \
    ./autogen.sh &&                                    \
    ./configure --enable-experimental --enable-module-{ecdh,recovery} && \
     make &&                                           \
     sudo make install &&                              \
     cd ../
```

secp256k1-php:
```
    git clone https://github.com/wartw/secp256k1-php.git && \
    cd secp256k1-php/secp256k1 &&                      \
    phpize &&                                          \ 
    ./configure --with-secp256k1 &&                    \  
    make && sudo make install &&                       \
    cd ../../
```

### Examples

See [the examples folder](./examples), or [the *_basic.phpt files in the test suite](./secp256k1/tests) 

### (Optional) - Enable extension by default!
If you're a heavy user, you can add this line to your php.ini files for php-cli, apache2, or php-fpm. 

/etc/php/php.ini
```
extension=secp256k1.so
```

### Run Tests

(Commands issued from secp256k1-php directory)

Basic tests:

    cd secp256k1-php/secp256k1 && make test

