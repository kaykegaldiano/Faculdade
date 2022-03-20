<?php

namespace Faculdade\Model;

/**
 * @Entity
 * @Table(name="usuarios")
 */

 class Usuario
 {
     /**
      * @Id
      * @GeneratedValue
      * @Column(type="integer")
      */
      private int $id;
      /**
       * @Column(type="string")
       */
      private string $email;
      /**
       * @Column(type="string")
       */
      private string $senha;

      public function senhaEstaCorreta(string $senhaPura): bool
      {
          return password_verify($senhaPura, $this->senha);
      }
 }