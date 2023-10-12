<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateAzByInstanceTypeRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateAzByInstanceTypeRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  待切换AZ的集群ID。
    * instType  待切换AZ的节点类型。支持: - all：所有节点类型。 - ess： 数据节点。 - ess-cold: 冷数据节点。 - ess-client: Client节点。 - ess-master: Master节点。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'instType' => 'string',
            'body' => '\HuaweiCloud\SDK\Css\V1\Model\UpdateAzByInstanceTypeReq'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  待切换AZ的集群ID。
    * instType  待切换AZ的节点类型。支持: - all：所有节点类型。 - ess： 数据节点。 - ess-cold: 冷数据节点。 - ess-client: Client节点。 - ess-master: Master节点。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'instType' => null,
        'body' => null
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
    * clusterId  待切换AZ的集群ID。
    * instType  待切换AZ的节点类型。支持: - all：所有节点类型。 - ess： 数据节点。 - ess-cold: 冷数据节点。 - ess-client: Client节点。 - ess-master: Master节点。
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'instType' => 'inst_type',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  待切换AZ的集群ID。
    * instType  待切换AZ的节点类型。支持: - all：所有节点类型。 - ess： 数据节点。 - ess-cold: 冷数据节点。 - ess-client: Client节点。 - ess-master: Master节点。
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'instType' => 'setInstType',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  待切换AZ的集群ID。
    * instType  待切换AZ的节点类型。支持: - all：所有节点类型。 - ess： 数据节点。 - ess-cold: 冷数据节点。 - ess-client: Client节点。 - ess-master: Master节点。
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'instType' => 'getInstType',
            'body' => 'getBody'
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
    const INST_TYPE_ALL = 'all';
    const INST_TYPE_ESS = 'ess';
    const INST_TYPE_ESS_COLD = 'ess-cold';
    const INST_TYPE_ESS_CLIENT = 'ess-client';
    const INST_TYPE_ESS_MASTER = 'ess-master';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInstTypeAllowableValues()
    {
        return [
            self::INST_TYPE_ALL,
            self::INST_TYPE_ESS,
            self::INST_TYPE_ESS_COLD,
            self::INST_TYPE_ESS_CLIENT,
            self::INST_TYPE_ESS_MASTER,
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['instType'] = isset($data['instType']) ? $data['instType'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
            if ((mb_strlen($this->container['clusterId']) > 36)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['clusterId']) < 36)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['instType'] === null) {
            $invalidProperties[] = "'instType' can't be null";
        }
            $allowedValues = $this->getInstTypeAllowableValues();
                if (!is_null($this->container['instType']) && !in_array($this->container['instType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'instType', must be one of '%s'",
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
    * Gets clusterId
    *  待切换AZ的集群ID。
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId 待切换AZ的集群ID。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets instType
    *  待切换AZ的节点类型。支持: - all：所有节点类型。 - ess： 数据节点。 - ess-cold: 冷数据节点。 - ess-client: Client节点。 - ess-master: Master节点。
    *
    * @return string
    */
    public function getInstType()
    {
        return $this->container['instType'];
    }

    /**
    * Sets instType
    *
    * @param string $instType 待切换AZ的节点类型。支持: - all：所有节点类型。 - ess： 数据节点。 - ess-cold: 冷数据节点。 - ess-client: Client节点。 - ess-master: Master节点。
    *
    * @return $this
    */
    public function setInstType($instType)
    {
        $this->container['instType'] = $instType;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\UpdateAzByInstanceTypeReq|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\UpdateAzByInstanceTypeReq|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

