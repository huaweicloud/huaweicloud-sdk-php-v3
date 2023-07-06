<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TuningParamInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TuningParamInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fullSync  全量调优参数。
    * increCapture  增量抓取调优参数。
    * increApply  增量回放调优参数。
    * increRelay  增量日志拉取调优参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fullSync' => '\HuaweiCloud\SDK\Drs\V5\Model\TuningParameter[]',
            'increCapture' => '\HuaweiCloud\SDK\Drs\V5\Model\TuningParameter[]',
            'increApply' => '\HuaweiCloud\SDK\Drs\V5\Model\TuningParameter[]',
            'increRelay' => '\HuaweiCloud\SDK\Drs\V5\Model\TuningParameter[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fullSync  全量调优参数。
    * increCapture  增量抓取调优参数。
    * increApply  增量回放调优参数。
    * increRelay  增量日志拉取调优参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fullSync' => null,
        'increCapture' => null,
        'increApply' => null,
        'increRelay' => null
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
    * fullSync  全量调优参数。
    * increCapture  增量抓取调优参数。
    * increApply  增量回放调优参数。
    * increRelay  增量日志拉取调优参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fullSync' => 'full_sync',
            'increCapture' => 'incre_capture',
            'increApply' => 'incre_apply',
            'increRelay' => 'incre_relay'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fullSync  全量调优参数。
    * increCapture  增量抓取调优参数。
    * increApply  增量回放调优参数。
    * increRelay  增量日志拉取调优参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'fullSync' => 'setFullSync',
            'increCapture' => 'setIncreCapture',
            'increApply' => 'setIncreApply',
            'increRelay' => 'setIncreRelay'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fullSync  全量调优参数。
    * increCapture  增量抓取调优参数。
    * increApply  增量回放调优参数。
    * increRelay  增量日志拉取调优参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'fullSync' => 'getFullSync',
            'increCapture' => 'getIncreCapture',
            'increApply' => 'getIncreApply',
            'increRelay' => 'getIncreRelay'
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
        $this->container['fullSync'] = isset($data['fullSync']) ? $data['fullSync'] : null;
        $this->container['increCapture'] = isset($data['increCapture']) ? $data['increCapture'] : null;
        $this->container['increApply'] = isset($data['increApply']) ? $data['increApply'] : null;
        $this->container['increRelay'] = isset($data['increRelay']) ? $data['increRelay'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['fullSync'] === null) {
            $invalidProperties[] = "'fullSync' can't be null";
        }
        if ($this->container['increCapture'] === null) {
            $invalidProperties[] = "'increCapture' can't be null";
        }
        if ($this->container['increApply'] === null) {
            $invalidProperties[] = "'increApply' can't be null";
        }
        if ($this->container['increRelay'] === null) {
            $invalidProperties[] = "'increRelay' can't be null";
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
    * Gets fullSync
    *  全量调优参数。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\TuningParameter[]
    */
    public function getFullSync()
    {
        return $this->container['fullSync'];
    }

    /**
    * Sets fullSync
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\TuningParameter[] $fullSync 全量调优参数。
    *
    * @return $this
    */
    public function setFullSync($fullSync)
    {
        $this->container['fullSync'] = $fullSync;
        return $this;
    }

    /**
    * Gets increCapture
    *  增量抓取调优参数。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\TuningParameter[]
    */
    public function getIncreCapture()
    {
        return $this->container['increCapture'];
    }

    /**
    * Sets increCapture
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\TuningParameter[] $increCapture 增量抓取调优参数。
    *
    * @return $this
    */
    public function setIncreCapture($increCapture)
    {
        $this->container['increCapture'] = $increCapture;
        return $this;
    }

    /**
    * Gets increApply
    *  增量回放调优参数。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\TuningParameter[]
    */
    public function getIncreApply()
    {
        return $this->container['increApply'];
    }

    /**
    * Sets increApply
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\TuningParameter[] $increApply 增量回放调优参数。
    *
    * @return $this
    */
    public function setIncreApply($increApply)
    {
        $this->container['increApply'] = $increApply;
        return $this;
    }

    /**
    * Gets increRelay
    *  增量日志拉取调优参数。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\TuningParameter[]
    */
    public function getIncreRelay()
    {
        return $this->container['increRelay'];
    }

    /**
    * Sets increRelay
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\TuningParameter[] $increRelay 增量日志拉取调优参数。
    *
    * @return $this
    */
    public function setIncreRelay($increRelay)
    {
        $this->container['increRelay'] = $increRelay;
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

