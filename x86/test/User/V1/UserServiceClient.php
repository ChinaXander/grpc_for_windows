<?php
// GENERATED CODE -- DO NOT EDIT!

namespace User\V1;

/**
 */
class UserServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \User\V1\UidReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetUser(\User\V1\UidReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.v1.UserService/GetUser',
        $argument,
        ['\User\V1\UserRes', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \User\V1\NameReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetUserAll(\User\V1\NameReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.v1.UserService/GetUserAll',
        $argument,
        ['\User\V1\UserAllRes', 'decode'],
        $metadata, $options);
    }

}
