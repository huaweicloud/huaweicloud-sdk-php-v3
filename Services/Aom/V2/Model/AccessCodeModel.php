<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AccessCodeModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AccessCodeModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessCode  access_code
    * accessCodeId  access_code_id
    * createAt  创建时间
    * status  状态 enable:开启 unenable:关闭
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessCode' => 'string',
            'accessCodeId' => 'string',
            'createAt' => 'int',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessCode  access_code
    * accessCodeId  access_code_id
    * createAt  创建时间
    * status  状态 enable:开启 unenable:关闭
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessCode' => null,
        'accessCodeId' => null,
        'createAt' => 'int64',
        'status' => null
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
    * accessCode  access_code
    * accessCodeId  access_code_id
    * createAt  创建时间
    * status  状态 enable:开启 unenable:关闭
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessCode' => 'access_code',
            'accessCodeId' => 'access_code_id',
            'createAt' => 'create_at',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessCode  access_code
    * accessCodeId  access_code_id
    * createAt  创建时间
    * status  状态 enable:开启 unenable:关闭
    *
    * @var string[]
    */
    protected static $setters = [
            'accessCode' => 'setAccessCode',
            'accessCodeId' => 'setAccessCodeId',
            'createAt' => 'setCreateAt',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessCode  access_code
    * accessCodeId  access_code_id
    * createAt  创建时间
    * status  状态 enable:开启 unenable:关闭
    *
    * @var string[]
    */
    protected static $getters = [
            'accessCode' => 'getAccessCode',
            'accessCodeId' => 'getAccessCodeId',
            'createAt' => 'getCreateAt',
            'status' => 'getStatus'
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
    const STATUS_ENABLE = 'enable';
    const STATUS_UNENABLE = 'unenable';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ENABLE,
            self::STATUS_UNENABLE,
        ];
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
        $this->container['accessCode'] = isset($data['accessCode']) ? $data['accessCode'] : null;
        $this->container['accessCodeId'] = isset($data['accessCodeId']) ? $data['accessCodeId'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['accessCode']) && (mb_strlen($this->container['accessCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'accessCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['accessCode']) && (mb_strlen($this->container['accessCode']) < 64)) {
                $invalidProperties[] = "invalid value for 'accessCode', the character length must be bigger than or equal to 64.";
            }
            if (!is_null($this->container['accessCodeId']) && (mb_strlen($this->container['accessCodeId']) > 32)) {
                $invalidProperties[] = "invalid value for 'accessCodeId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['accessCodeId']) && (mb_strlen($this->container['accessCodeId']) < 32)) {
                $invalidProperties[] = "invalid value for 'accessCodeId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['createAt']) && ($this->container['createAt'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'createAt', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['createAt']) && ($this->container['createAt'] < 0)) {
                $invalidProperties[] = "invalid value for 'createAt', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

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
    * Gets accessCode
    *  access_code
    *
    * @return string|null
    */
    public function getAccessCode()
    {
        return $this->container['accessCode'];
    }

    /**
    * Sets accessCode
    *
    * @param string|null $accessCode access_code
    *
    * @return $this
    */
    public function setAccessCode($accessCode)
    {
        $this->container['accessCode'] = $accessCode;
        return $this;
    }

    /**
    * Gets accessCodeId
    *  access_code_id
    *
    * @return string|null
    */
    public function getAccessCodeId()
    {
        return $this->container['accessCodeId'];
    }

    /**
    * Sets accessCodeId
    *
    * @param string|null $accessCodeId access_code_id
    *
    * @return $this
    */
    public function setAccessCodeId($accessCodeId)
    {
        $this->container['accessCodeId'] = $accessCodeId;
        return $this;
    }

    /**
    * Gets createAt
    *  创建时间
    *
    * @return int|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param int|null $createAt 创建时间
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets status
    *  状态 enable:开启 unenable:关闭
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 状态 enable:开启 unenable:关闭
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

