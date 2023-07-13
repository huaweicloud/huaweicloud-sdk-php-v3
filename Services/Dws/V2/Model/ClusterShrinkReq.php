<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterShrinkReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterShrinkReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * shrinkNumber  缩容数
    * online  在线
    * type  数据库类型
    * retry  重试
    * forceBackup  执行备份
    * needAgency  是否需要委托
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'shrinkNumber' => 'int',
            'online' => 'bool',
            'type' => 'string',
            'retry' => 'bool',
            'forceBackup' => 'bool',
            'needAgency' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * shrinkNumber  缩容数
    * online  在线
    * type  数据库类型
    * retry  重试
    * forceBackup  执行备份
    * needAgency  是否需要委托
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'shrinkNumber' => null,
        'online' => null,
        'type' => null,
        'retry' => null,
        'forceBackup' => null,
        'needAgency' => null
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
    * shrinkNumber  缩容数
    * online  在线
    * type  数据库类型
    * retry  重试
    * forceBackup  执行备份
    * needAgency  是否需要委托
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'shrinkNumber' => 'shrink_number',
            'online' => 'online',
            'type' => 'type',
            'retry' => 'retry',
            'forceBackup' => 'force_backup',
            'needAgency' => 'need_agency'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * shrinkNumber  缩容数
    * online  在线
    * type  数据库类型
    * retry  重试
    * forceBackup  执行备份
    * needAgency  是否需要委托
    *
    * @var string[]
    */
    protected static $setters = [
            'shrinkNumber' => 'setShrinkNumber',
            'online' => 'setOnline',
            'type' => 'setType',
            'retry' => 'setRetry',
            'forceBackup' => 'setForceBackup',
            'needAgency' => 'setNeedAgency'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * shrinkNumber  缩容数
    * online  在线
    * type  数据库类型
    * retry  重试
    * forceBackup  执行备份
    * needAgency  是否需要委托
    *
    * @var string[]
    */
    protected static $getters = [
            'shrinkNumber' => 'getShrinkNumber',
            'online' => 'getOnline',
            'type' => 'getType',
            'retry' => 'getRetry',
            'forceBackup' => 'getForceBackup',
            'needAgency' => 'getNeedAgency'
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
        $this->container['shrinkNumber'] = isset($data['shrinkNumber']) ? $data['shrinkNumber'] : null;
        $this->container['online'] = isset($data['online']) ? $data['online'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['retry'] = isset($data['retry']) ? $data['retry'] : null;
        $this->container['forceBackup'] = isset($data['forceBackup']) ? $data['forceBackup'] : null;
        $this->container['needAgency'] = isset($data['needAgency']) ? $data['needAgency'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['shrinkNumber'] === null) {
            $invalidProperties[] = "'shrinkNumber' can't be null";
        }
        if ($this->container['online'] === null) {
            $invalidProperties[] = "'online' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['forceBackup'] === null) {
            $invalidProperties[] = "'forceBackup' can't be null";
        }
        if ($this->container['needAgency'] === null) {
            $invalidProperties[] = "'needAgency' can't be null";
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
    * Gets shrinkNumber
    *  缩容数
    *
    * @return int
    */
    public function getShrinkNumber()
    {
        return $this->container['shrinkNumber'];
    }

    /**
    * Sets shrinkNumber
    *
    * @param int $shrinkNumber 缩容数
    *
    * @return $this
    */
    public function setShrinkNumber($shrinkNumber)
    {
        $this->container['shrinkNumber'] = $shrinkNumber;
        return $this;
    }

    /**
    * Gets online
    *  在线
    *
    * @return bool
    */
    public function getOnline()
    {
        return $this->container['online'];
    }

    /**
    * Sets online
    *
    * @param bool $online 在线
    *
    * @return $this
    */
    public function setOnline($online)
    {
        $this->container['online'] = $online;
        return $this;
    }

    /**
    * Gets type
    *  数据库类型
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 数据库类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets retry
    *  重试
    *
    * @return bool|null
    */
    public function getRetry()
    {
        return $this->container['retry'];
    }

    /**
    * Sets retry
    *
    * @param bool|null $retry 重试
    *
    * @return $this
    */
    public function setRetry($retry)
    {
        $this->container['retry'] = $retry;
        return $this;
    }

    /**
    * Gets forceBackup
    *  执行备份
    *
    * @return bool
    */
    public function getForceBackup()
    {
        return $this->container['forceBackup'];
    }

    /**
    * Sets forceBackup
    *
    * @param bool $forceBackup 执行备份
    *
    * @return $this
    */
    public function setForceBackup($forceBackup)
    {
        $this->container['forceBackup'] = $forceBackup;
        return $this;
    }

    /**
    * Gets needAgency
    *  是否需要委托
    *
    * @return bool
    */
    public function getNeedAgency()
    {
        return $this->container['needAgency'];
    }

    /**
    * Sets needAgency
    *
    * @param bool $needAgency 是否需要委托
    *
    * @return $this
    */
    public function setNeedAgency($needAgency)
    {
        $this->container['needAgency'] = $needAgency;
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

