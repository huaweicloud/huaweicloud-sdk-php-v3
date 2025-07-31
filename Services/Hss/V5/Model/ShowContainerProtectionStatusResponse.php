<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowContainerProtectionStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowContainerProtectionStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * noRisk  无风险的容器数
    * risk  有风险的容器数
    * noProtect  未防护的容器数
    * totalNum  容器总数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'noRisk' => 'int',
            'risk' => 'int',
            'noProtect' => 'int',
            'totalNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * noRisk  无风险的容器数
    * risk  有风险的容器数
    * noProtect  未防护的容器数
    * totalNum  容器总数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'noRisk' => null,
        'risk' => null,
        'noProtect' => null,
        'totalNum' => null
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
    * noRisk  无风险的容器数
    * risk  有风险的容器数
    * noProtect  未防护的容器数
    * totalNum  容器总数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'noRisk' => 'no_risk',
            'risk' => 'risk',
            'noProtect' => 'no_protect',
            'totalNum' => 'total_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * noRisk  无风险的容器数
    * risk  有风险的容器数
    * noProtect  未防护的容器数
    * totalNum  容器总数
    *
    * @var string[]
    */
    protected static $setters = [
            'noRisk' => 'setNoRisk',
            'risk' => 'setRisk',
            'noProtect' => 'setNoProtect',
            'totalNum' => 'setTotalNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * noRisk  无风险的容器数
    * risk  有风险的容器数
    * noProtect  未防护的容器数
    * totalNum  容器总数
    *
    * @var string[]
    */
    protected static $getters = [
            'noRisk' => 'getNoRisk',
            'risk' => 'getRisk',
            'noProtect' => 'getNoProtect',
            'totalNum' => 'getTotalNum'
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
        $this->container['noRisk'] = isset($data['noRisk']) ? $data['noRisk'] : null;
        $this->container['risk'] = isset($data['risk']) ? $data['risk'] : null;
        $this->container['noProtect'] = isset($data['noProtect']) ? $data['noProtect'] : null;
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
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
    * Gets noRisk
    *  无风险的容器数
    *
    * @return int|null
    */
    public function getNoRisk()
    {
        return $this->container['noRisk'];
    }

    /**
    * Sets noRisk
    *
    * @param int|null $noRisk 无风险的容器数
    *
    * @return $this
    */
    public function setNoRisk($noRisk)
    {
        $this->container['noRisk'] = $noRisk;
        return $this;
    }

    /**
    * Gets risk
    *  有风险的容器数
    *
    * @return int|null
    */
    public function getRisk()
    {
        return $this->container['risk'];
    }

    /**
    * Sets risk
    *
    * @param int|null $risk 有风险的容器数
    *
    * @return $this
    */
    public function setRisk($risk)
    {
        $this->container['risk'] = $risk;
        return $this;
    }

    /**
    * Gets noProtect
    *  未防护的容器数
    *
    * @return int|null
    */
    public function getNoProtect()
    {
        return $this->container['noProtect'];
    }

    /**
    * Sets noProtect
    *
    * @param int|null $noProtect 未防护的容器数
    *
    * @return $this
    */
    public function setNoProtect($noProtect)
    {
        $this->container['noProtect'] = $noProtect;
        return $this;
    }

    /**
    * Gets totalNum
    *  容器总数
    *
    * @return int|null
    */
    public function getTotalNum()
    {
        return $this->container['totalNum'];
    }

    /**
    * Sets totalNum
    *
    * @param int|null $totalNum 容器总数
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
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

