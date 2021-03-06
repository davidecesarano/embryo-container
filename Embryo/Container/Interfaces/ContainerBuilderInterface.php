<?php 

    /**
     * ContainerBuilderInterface
     * 
     * @author Davide Cesarano <davide.cesarano@unipegaso.it>
     * @link   https://github.com/davidecesarano/embryo-container
     */

    namespace Embryo\Container\Interfaces;

    use Psr\Container\ContainerInterface;

    interface ContainerBuilderInterface 
    {
        /**
         * @param string $key 
         * @param callable $resolver 
         * @return void
         */
        public function set(string $key, callable $resolver);

        /**
         * @param string $key 
         * @return mixed
         */
        public function get(string $key);

        /**
         * @return ContainerInterface
         */
        public function build(): ContainerInterface;

        /**
         * @param string $key 
         * @param string $keyService
         * @return void
         */
        public function alias(string $key, $keyService);
    }