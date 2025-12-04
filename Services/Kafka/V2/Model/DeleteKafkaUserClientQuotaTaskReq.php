<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteKafkaUserClientQuotaTaskReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteKafkaUserClientQuotaTaskReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * user  用户名。  不对全部用户/客户端限流时，用户名和客户端ID不能同时为空。
    * client  客户端ID。  不对全部用户/客户端限流时，用户名和客户端ID不能同时为空。
    * userDefault  是否使用用户默认设置。   - 是：表示对全部用户限流。此时不能同时设置用户名。   - 否：表示对特定用户限流。此时需要设置用户名。
    * clientDefault  是否使用客户端默认设置。   - 是：表示对全部客户端限流。此时不能设置客户端ID。   - 否：表示对特定客户端限流。此时需要设置客户端ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'user' => 'string',
            'client' => 'string',
            'userDefault' => 'bool',
            'clientDefault' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * user  用户名。  不对全部用户/客户端限流时，用户名和客户端ID不能同时为空。
    * client  客户端ID。  不对全部用户/客户端限流时，用户名和客户端ID不能同时为空。
    * userDefault  是否使用用户默认设置。   - 是：表示对全部用户限流。此时不能同时设置用户名。   - 否：表示对特定用户限流。此时需要设置用户名。
    * clientDefault  是否使用客户端默认设置。   - 是：表示对全部客户端限流。此时不能设置客户端ID。   - 否：表示对特定客户端限流。此时需要设置客户端ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'user' => null,
        'client' => null,
        'userDefault' => null,
        'clientDefault' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * user  用户名。  不对全部用户/客户端限流时，用户名和客户端ID不能同时为空。
    * client  客户端ID。  不对全部用户/客户端限流时，用户名和客户端ID不能同时为空。
    * userDefault  是否使用用户默认设置。   - 是：表示对全部用户限流。此时不能同时设置用户名。   - 否：表示对特定用户限流。此时需要设置用户名。
    * clientDefault  是否使用客户端默认设置。   - 是：表示对全部客户端限流。此时不能设置客户端ID。   - 否：表示对特定客户端限流。此时需要设置客户端ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'user' => 'user',
            'client' => 'client',
            'userDefault' => 'user_default',
            'clientDefault' => 'client_default'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * user  用户名。  不对全部用户/客户端限流时，用户名和客户端ID不能同时为空。
    * client  客户端ID。  不对全部用户/客户端限流时，用户名和客户端ID不能同时为空。
    * userDefault  是否使用用户默认设置。   - 是：表示对全部用户限流。此时不能同时设置用户名。   - 否：表示对特定用户限流。此时需要设置用户名。
    * clientDefault  是否使用客户端默认设置。   - 是：表示对全部客户端限流。此时不能设置客户端ID。   - 否：表示对特定客户端限流。此时需要设置客户端ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'user' => 'setUser',
            'client' => 'setClient',
            'userDefault' => 'setUserDefault',
            'clientDefault' => 'setClientDefault'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * user  用户名。  不对全部用户/客户端限流时，用户名和客户端ID不能同时为空。
    * client  客户端ID。  不对全部用户/客户端限流时，用户名和客户端ID不能同时为空。
    * userDefault  是否使用用户默认设置。   - 是：表示对全部用户限流。此时不能同时设置用户名。   - 否：表示对特定用户限流。此时需要设置用户名。
    * clientDefault  是否使用客户端默认设置。   - 是：表示对全部客户端限流。此时不能设置客户端ID。   - 否：表示对特定客户端限流。此时需要设置客户端ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'user' => 'getUser',
            'client' => 'getClient',
            'userDefault' => 'getUserDefault',
            'clientDefault' => 'getClientDefault'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['client'] = isset($data['client']) ? $data['client'] : null;
        $this->container['userDefault'] = isset($data['userDefault']) ? $data['userDefault'] : null;
        $this->container['clientDefault'] = isset($data['clientDefault']) ? $data['clientDefault'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets user
    *  用户名。  不对全部用户/客户端限流时，用户名和客户端ID不能同时为空。
    *
    * @return string|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param string|null $user 用户名。  不对全部用户/客户端限流时，用户名和客户端ID不能同时为空。
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets client
    *  客户端ID。  不对全部用户/客户端限流时，用户名和客户端ID不能同时为空。
    *
    * @return string|null
    */
    public function getClient()
    {
        return $this->container['client'];
    }

    /**
    * Sets client
    *
    * @param string|null $client 客户端ID。  不对全部用户/客户端限流时，用户名和客户端ID不能同时为空。
    *
    * @return $this
    */
    public function setClient($client)
    {
        $this->container['client'] = $client;
        return $this;
    }

    /**
    * Gets userDefault
    *  是否使用用户默认设置。   - 是：表示对全部用户限流。此时不能同时设置用户名。   - 否：表示对特定用户限流。此时需要设置用户名。
    *
    * @return bool|null
    */
    public function getUserDefault()
    {
        return $this->container['userDefault'];
    }

    /**
    * Sets userDefault
    *
    * @param bool|null $userDefault 是否使用用户默认设置。   - 是：表示对全部用户限流。此时不能同时设置用户名。   - 否：表示对特定用户限流。此时需要设置用户名。
    *
    * @return $this
    */
    public function setUserDefault($userDefault)
    {
        $this->container['userDefault'] = $userDefault;
        return $this;
    }

    /**
    * Gets clientDefault
    *  是否使用客户端默认设置。   - 是：表示对全部客户端限流。此时不能设置客户端ID。   - 否：表示对特定客户端限流。此时需要设置客户端ID。
    *
    * @return bool|null
    */
    public function getClientDefault()
    {
        return $this->container['clientDefault'];
    }

    /**
    * Sets clientDefault
    *
    * @param bool|null $clientDefault 是否使用客户端默认设置。   - 是：表示对全部客户端限流。此时不能设置客户端ID。   - 否：表示对特定客户端限流。此时需要设置客户端ID。
    *
    * @return $this
    */
    public function setClientDefault($clientDefault)
    {
        $this->container['clientDefault'] = $clientDefault;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

