<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DatasetInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DatasetInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * csvc  所属云服务,例如主机安全就填写hss
    * enable  启用状态：0未启用；1启用
    * isRegion  位置信息：1 region；0 global
    * reference  reference
    * sourceId  数据源ID
    * sourceName  数据源名称
    * target  目标管道信息
    * type  订阅类型：1租户订阅；2租户行管订阅；3平台行管(当前都为1)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'csvc' => 'string',
            'enable' => 'string',
            'isRegion' => 'int',
            'reference' => '\HuaweiCloud\SDK\SecMaster\V1\Model\DatasetInfoReference',
            'sourceId' => 'int',
            'sourceName' => 'string',
            'target' => 'object',
            'type' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * csvc  所属云服务,例如主机安全就填写hss
    * enable  启用状态：0未启用；1启用
    * isRegion  位置信息：1 region；0 global
    * reference  reference
    * sourceId  数据源ID
    * sourceName  数据源名称
    * target  目标管道信息
    * type  订阅类型：1租户订阅；2租户行管订阅；3平台行管(当前都为1)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'csvc' => null,
        'enable' => null,
        'isRegion' => 'int64',
        'reference' => null,
        'sourceId' => 'int64',
        'sourceName' => null,
        'target' => null,
        'type' => 'int64'
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
    * csvc  所属云服务,例如主机安全就填写hss
    * enable  启用状态：0未启用；1启用
    * isRegion  位置信息：1 region；0 global
    * reference  reference
    * sourceId  数据源ID
    * sourceName  数据源名称
    * target  目标管道信息
    * type  订阅类型：1租户订阅；2租户行管订阅；3平台行管(当前都为1)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'csvc' => 'csvc',
            'enable' => 'enable',
            'isRegion' => 'is_region',
            'reference' => 'reference',
            'sourceId' => 'source_id',
            'sourceName' => 'source_name',
            'target' => 'target',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * csvc  所属云服务,例如主机安全就填写hss
    * enable  启用状态：0未启用；1启用
    * isRegion  位置信息：1 region；0 global
    * reference  reference
    * sourceId  数据源ID
    * sourceName  数据源名称
    * target  目标管道信息
    * type  订阅类型：1租户订阅；2租户行管订阅；3平台行管(当前都为1)
    *
    * @var string[]
    */
    protected static $setters = [
            'csvc' => 'setCsvc',
            'enable' => 'setEnable',
            'isRegion' => 'setIsRegion',
            'reference' => 'setReference',
            'sourceId' => 'setSourceId',
            'sourceName' => 'setSourceName',
            'target' => 'setTarget',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * csvc  所属云服务,例如主机安全就填写hss
    * enable  启用状态：0未启用；1启用
    * isRegion  位置信息：1 region；0 global
    * reference  reference
    * sourceId  数据源ID
    * sourceName  数据源名称
    * target  目标管道信息
    * type  订阅类型：1租户订阅；2租户行管订阅；3平台行管(当前都为1)
    *
    * @var string[]
    */
    protected static $getters = [
            'csvc' => 'getCsvc',
            'enable' => 'getEnable',
            'isRegion' => 'getIsRegion',
            'reference' => 'getReference',
            'sourceId' => 'getSourceId',
            'sourceName' => 'getSourceName',
            'target' => 'getTarget',
            'type' => 'getType'
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
        $this->container['csvc'] = isset($data['csvc']) ? $data['csvc'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['isRegion'] = isset($data['isRegion']) ? $data['isRegion'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['sourceName'] = isset($data['sourceName']) ? $data['sourceName'] : null;
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['csvc'] === null) {
            $invalidProperties[] = "'csvc' can't be null";
        }
            if ((mb_strlen($this->container['csvc']) > 255)) {
                $invalidProperties[] = "invalid value for 'csvc', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['csvc']) < 1)) {
                $invalidProperties[] = "invalid value for 'csvc', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['enable'] === null) {
            $invalidProperties[] = "'enable' can't be null";
        }
        if ($this->container['isRegion'] === null) {
            $invalidProperties[] = "'isRegion' can't be null";
        }
            if (($this->container['isRegion'] > 10)) {
                $invalidProperties[] = "invalid value for 'isRegion', must be smaller than or equal to 10.";
            }
            if (($this->container['isRegion'] < 0)) {
                $invalidProperties[] = "invalid value for 'isRegion', must be bigger than or equal to 0.";
            }
        if ($this->container['reference'] === null) {
            $invalidProperties[] = "'reference' can't be null";
        }
        if ($this->container['sourceId'] === null) {
            $invalidProperties[] = "'sourceId' can't be null";
        }
            if (($this->container['sourceId'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'sourceId', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['sourceId'] < 0)) {
                $invalidProperties[] = "invalid value for 'sourceId', must be bigger than or equal to 0.";
            }
        if ($this->container['sourceName'] === null) {
            $invalidProperties[] = "'sourceName' can't be null";
        }
            if ((mb_strlen($this->container['sourceName']) > 255)) {
                $invalidProperties[] = "invalid value for 'sourceName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['sourceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'sourceName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['target'] === null) {
            $invalidProperties[] = "'target' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if (($this->container['type'] > 10)) {
                $invalidProperties[] = "invalid value for 'type', must be smaller than or equal to 10.";
            }
            if (($this->container['type'] < 0)) {
                $invalidProperties[] = "invalid value for 'type', must be bigger than or equal to 0.";
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
    * Gets csvc
    *  所属云服务,例如主机安全就填写hss
    *
    * @return string
    */
    public function getCsvc()
    {
        return $this->container['csvc'];
    }

    /**
    * Sets csvc
    *
    * @param string $csvc 所属云服务,例如主机安全就填写hss
    *
    * @return $this
    */
    public function setCsvc($csvc)
    {
        $this->container['csvc'] = $csvc;
        return $this;
    }

    /**
    * Gets enable
    *  启用状态：0未启用；1启用
    *
    * @return string
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param string $enable 启用状态：0未启用；1启用
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets isRegion
    *  位置信息：1 region；0 global
    *
    * @return int
    */
    public function getIsRegion()
    {
        return $this->container['isRegion'];
    }

    /**
    * Sets isRegion
    *
    * @param int $isRegion 位置信息：1 region；0 global
    *
    * @return $this
    */
    public function setIsRegion($isRegion)
    {
        $this->container['isRegion'] = $isRegion;
        return $this;
    }

    /**
    * Gets reference
    *  reference
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\DatasetInfoReference
    */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
    * Sets reference
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\DatasetInfoReference $reference reference
    *
    * @return $this
    */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;
        return $this;
    }

    /**
    * Gets sourceId
    *  数据源ID
    *
    * @return int
    */
    public function getSourceId()
    {
        return $this->container['sourceId'];
    }

    /**
    * Sets sourceId
    *
    * @param int $sourceId 数据源ID
    *
    * @return $this
    */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;
        return $this;
    }

    /**
    * Gets sourceName
    *  数据源名称
    *
    * @return string
    */
    public function getSourceName()
    {
        return $this->container['sourceName'];
    }

    /**
    * Sets sourceName
    *
    * @param string $sourceName 数据源名称
    *
    * @return $this
    */
    public function setSourceName($sourceName)
    {
        $this->container['sourceName'] = $sourceName;
        return $this;
    }

    /**
    * Gets target
    *  目标管道信息
    *
    * @return object
    */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
    * Sets target
    *
    * @param object $target 目标管道信息
    *
    * @return $this
    */
    public function setTarget($target)
    {
        $this->container['target'] = $target;
        return $this;
    }

    /**
    * Gets type
    *  订阅类型：1租户订阅；2租户行管订阅；3平台行管(当前都为1)
    *
    * @return int
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int $type 订阅类型：1租户订阅；2租户行管订阅；3平台行管(当前都为1)
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

