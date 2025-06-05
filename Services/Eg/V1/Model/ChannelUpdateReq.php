<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChannelUpdateReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChannelUpdateReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  通道描述
    * enterpriseProjectId  企业项目id
    * crossAccount  跨账号开关
    * policy  策略
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'enterpriseProjectId' => 'string',
            'crossAccount' => 'bool',
            'policy' => 'map[string,\HuaweiCloud\SDK\Eg\V1\Model\ChannelCreateReqPolicy]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  通道描述
    * enterpriseProjectId  企业项目id
    * crossAccount  跨账号开关
    * policy  策略
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'enterpriseProjectId' => null,
        'crossAccount' => null,
        'policy' => null
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
    * description  通道描述
    * enterpriseProjectId  企业项目id
    * crossAccount  跨账号开关
    * policy  策略
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'enterpriseProjectId' => 'enterprise_project_id',
            'crossAccount' => 'cross_account',
            'policy' => 'policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  通道描述
    * enterpriseProjectId  企业项目id
    * crossAccount  跨账号开关
    * policy  策略
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'crossAccount' => 'setCrossAccount',
            'policy' => 'setPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  通道描述
    * enterpriseProjectId  企业项目id
    * crossAccount  跨账号开关
    * policy  策略
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'crossAccount' => 'getCrossAccount',
            'policy' => 'getPolicy'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['crossAccount'] = isset($data['crossAccount']) ? $data['crossAccount'] : null;
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
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
    * Gets description
    *  通道描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 通道描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目id
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets crossAccount
    *  跨账号开关
    *
    * @return bool|null
    */
    public function getCrossAccount()
    {
        return $this->container['crossAccount'];
    }

    /**
    * Sets crossAccount
    *
    * @param bool|null $crossAccount 跨账号开关
    *
    * @return $this
    */
    public function setCrossAccount($crossAccount)
    {
        $this->container['crossAccount'] = $crossAccount;
        return $this;
    }

    /**
    * Gets policy
    *  策略
    *
    * @return map[string,\HuaweiCloud\SDK\Eg\V1\Model\ChannelCreateReqPolicy]|null
    */
    public function getPolicy()
    {
        return $this->container['policy'];
    }

    /**
    * Sets policy
    *
    * @param map[string,\HuaweiCloud\SDK\Eg\V1\Model\ChannelCreateReqPolicy]|null $policy 策略
    *
    * @return $this
    */
    public function setPolicy($policy)
    {
        $this->container['policy'] = $policy;
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

