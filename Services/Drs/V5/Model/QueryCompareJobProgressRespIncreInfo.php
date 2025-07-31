<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryCompareJobProgressRespIncreInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryCompareJobProgressResp_incre_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * delay  增量对比时延，若时延为0表示所有增量数据都已对比完成。
    * srcSpeed  增量数据对比速率。
    * rps  每秒对比行数。
    * logPoint  增量位点。
    * recheckEntities  差异待复查行数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'delay' => 'float',
            'srcSpeed' => 'string',
            'rps' => 'int',
            'logPoint' => 'string',
            'recheckEntities' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * delay  增量对比时延，若时延为0表示所有增量数据都已对比完成。
    * srcSpeed  增量数据对比速率。
    * rps  每秒对比行数。
    * logPoint  增量位点。
    * recheckEntities  差异待复查行数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'delay' => 'float',
        'srcSpeed' => null,
        'rps' => 'int32',
        'logPoint' => null,
        'recheckEntities' => 'int32'
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
    * delay  增量对比时延，若时延为0表示所有增量数据都已对比完成。
    * srcSpeed  增量数据对比速率。
    * rps  每秒对比行数。
    * logPoint  增量位点。
    * recheckEntities  差异待复查行数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'delay' => 'delay',
            'srcSpeed' => 'src_speed',
            'rps' => 'rps',
            'logPoint' => 'log_point',
            'recheckEntities' => 'recheck_entities'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * delay  增量对比时延，若时延为0表示所有增量数据都已对比完成。
    * srcSpeed  增量数据对比速率。
    * rps  每秒对比行数。
    * logPoint  增量位点。
    * recheckEntities  差异待复查行数。
    *
    * @var string[]
    */
    protected static $setters = [
            'delay' => 'setDelay',
            'srcSpeed' => 'setSrcSpeed',
            'rps' => 'setRps',
            'logPoint' => 'setLogPoint',
            'recheckEntities' => 'setRecheckEntities'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * delay  增量对比时延，若时延为0表示所有增量数据都已对比完成。
    * srcSpeed  增量数据对比速率。
    * rps  每秒对比行数。
    * logPoint  增量位点。
    * recheckEntities  差异待复查行数。
    *
    * @var string[]
    */
    protected static $getters = [
            'delay' => 'getDelay',
            'srcSpeed' => 'getSrcSpeed',
            'rps' => 'getRps',
            'logPoint' => 'getLogPoint',
            'recheckEntities' => 'getRecheckEntities'
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
        $this->container['delay'] = isset($data['delay']) ? $data['delay'] : null;
        $this->container['srcSpeed'] = isset($data['srcSpeed']) ? $data['srcSpeed'] : null;
        $this->container['rps'] = isset($data['rps']) ? $data['rps'] : null;
        $this->container['logPoint'] = isset($data['logPoint']) ? $data['logPoint'] : null;
        $this->container['recheckEntities'] = isset($data['recheckEntities']) ? $data['recheckEntities'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['delay']) && ($this->container['delay'] > 1E+6)) {
                $invalidProperties[] = "invalid value for 'delay', must be smaller than or equal to 1E+6.";
            }
            if (!is_null($this->container['delay']) && ($this->container['delay'] < 0)) {
                $invalidProperties[] = "invalid value for 'delay', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['srcSpeed']) && (mb_strlen($this->container['srcSpeed']) > 256)) {
                $invalidProperties[] = "invalid value for 'srcSpeed', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['srcSpeed']) && (mb_strlen($this->container['srcSpeed']) < 0)) {
                $invalidProperties[] = "invalid value for 'srcSpeed', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['rps']) && ($this->container['rps'] > 1000000000)) {
                $invalidProperties[] = "invalid value for 'rps', must be smaller than or equal to 1000000000.";
            }
            if (!is_null($this->container['rps']) && ($this->container['rps'] < 0)) {
                $invalidProperties[] = "invalid value for 'rps', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['logPoint']) && (mb_strlen($this->container['logPoint']) > 256)) {
                $invalidProperties[] = "invalid value for 'logPoint', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['logPoint']) && (mb_strlen($this->container['logPoint']) < 0)) {
                $invalidProperties[] = "invalid value for 'logPoint', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['recheckEntities']) && ($this->container['recheckEntities'] > 1000000000)) {
                $invalidProperties[] = "invalid value for 'recheckEntities', must be smaller than or equal to 1000000000.";
            }
            if (!is_null($this->container['recheckEntities']) && ($this->container['recheckEntities'] < 0)) {
                $invalidProperties[] = "invalid value for 'recheckEntities', must be bigger than or equal to 0.";
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
    * Gets delay
    *  增量对比时延，若时延为0表示所有增量数据都已对比完成。
    *
    * @return float|null
    */
    public function getDelay()
    {
        return $this->container['delay'];
    }

    /**
    * Sets delay
    *
    * @param float|null $delay 增量对比时延，若时延为0表示所有增量数据都已对比完成。
    *
    * @return $this
    */
    public function setDelay($delay)
    {
        $this->container['delay'] = $delay;
        return $this;
    }

    /**
    * Gets srcSpeed
    *  增量数据对比速率。
    *
    * @return string|null
    */
    public function getSrcSpeed()
    {
        return $this->container['srcSpeed'];
    }

    /**
    * Sets srcSpeed
    *
    * @param string|null $srcSpeed 增量数据对比速率。
    *
    * @return $this
    */
    public function setSrcSpeed($srcSpeed)
    {
        $this->container['srcSpeed'] = $srcSpeed;
        return $this;
    }

    /**
    * Gets rps
    *  每秒对比行数。
    *
    * @return int|null
    */
    public function getRps()
    {
        return $this->container['rps'];
    }

    /**
    * Sets rps
    *
    * @param int|null $rps 每秒对比行数。
    *
    * @return $this
    */
    public function setRps($rps)
    {
        $this->container['rps'] = $rps;
        return $this;
    }

    /**
    * Gets logPoint
    *  增量位点。
    *
    * @return string|null
    */
    public function getLogPoint()
    {
        return $this->container['logPoint'];
    }

    /**
    * Sets logPoint
    *
    * @param string|null $logPoint 增量位点。
    *
    * @return $this
    */
    public function setLogPoint($logPoint)
    {
        $this->container['logPoint'] = $logPoint;
        return $this;
    }

    /**
    * Gets recheckEntities
    *  差异待复查行数。
    *
    * @return int|null
    */
    public function getRecheckEntities()
    {
        return $this->container['recheckEntities'];
    }

    /**
    * Sets recheckEntities
    *
    * @param int|null $recheckEntities 差异待复查行数。
    *
    * @return $this
    */
    public function setRecheckEntities($recheckEntities)
    {
        $this->container['recheckEntities'] = $recheckEntities;
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

