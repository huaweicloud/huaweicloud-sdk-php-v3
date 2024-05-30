<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AllModelStatisticVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AllModelStatisticVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * frequent  是否为常用。
    * top  首层模型。
    * logic  逻辑模型。
    * physical  物理模型。
    * dwr  dwr
    * dm  dm
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'frequent' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ModelStatisticVO[]',
            'top' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ModelStatisticVO[]',
            'logic' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ModelStatisticVO[]',
            'physical' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ModelStatisticVO[]',
            'dwr' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ModelStatisticVO',
            'dm' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ModelStatisticVO'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * frequent  是否为常用。
    * top  首层模型。
    * logic  逻辑模型。
    * physical  物理模型。
    * dwr  dwr
    * dm  dm
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'frequent' => null,
        'top' => null,
        'logic' => null,
        'physical' => null,
        'dwr' => null,
        'dm' => null
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
    * frequent  是否为常用。
    * top  首层模型。
    * logic  逻辑模型。
    * physical  物理模型。
    * dwr  dwr
    * dm  dm
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'frequent' => 'frequent',
            'top' => 'top',
            'logic' => 'logic',
            'physical' => 'physical',
            'dwr' => 'dwr',
            'dm' => 'dm'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * frequent  是否为常用。
    * top  首层模型。
    * logic  逻辑模型。
    * physical  物理模型。
    * dwr  dwr
    * dm  dm
    *
    * @var string[]
    */
    protected static $setters = [
            'frequent' => 'setFrequent',
            'top' => 'setTop',
            'logic' => 'setLogic',
            'physical' => 'setPhysical',
            'dwr' => 'setDwr',
            'dm' => 'setDm'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * frequent  是否为常用。
    * top  首层模型。
    * logic  逻辑模型。
    * physical  物理模型。
    * dwr  dwr
    * dm  dm
    *
    * @var string[]
    */
    protected static $getters = [
            'frequent' => 'getFrequent',
            'top' => 'getTop',
            'logic' => 'getLogic',
            'physical' => 'getPhysical',
            'dwr' => 'getDwr',
            'dm' => 'getDm'
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
        $this->container['frequent'] = isset($data['frequent']) ? $data['frequent'] : null;
        $this->container['top'] = isset($data['top']) ? $data['top'] : null;
        $this->container['logic'] = isset($data['logic']) ? $data['logic'] : null;
        $this->container['physical'] = isset($data['physical']) ? $data['physical'] : null;
        $this->container['dwr'] = isset($data['dwr']) ? $data['dwr'] : null;
        $this->container['dm'] = isset($data['dm']) ? $data['dm'] : null;
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
    * Gets frequent
    *  是否为常用。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ModelStatisticVO[]|null
    */
    public function getFrequent()
    {
        return $this->container['frequent'];
    }

    /**
    * Sets frequent
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ModelStatisticVO[]|null $frequent 是否为常用。
    *
    * @return $this
    */
    public function setFrequent($frequent)
    {
        $this->container['frequent'] = $frequent;
        return $this;
    }

    /**
    * Gets top
    *  首层模型。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ModelStatisticVO[]|null
    */
    public function getTop()
    {
        return $this->container['top'];
    }

    /**
    * Sets top
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ModelStatisticVO[]|null $top 首层模型。
    *
    * @return $this
    */
    public function setTop($top)
    {
        $this->container['top'] = $top;
        return $this;
    }

    /**
    * Gets logic
    *  逻辑模型。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ModelStatisticVO[]|null
    */
    public function getLogic()
    {
        return $this->container['logic'];
    }

    /**
    * Sets logic
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ModelStatisticVO[]|null $logic 逻辑模型。
    *
    * @return $this
    */
    public function setLogic($logic)
    {
        $this->container['logic'] = $logic;
        return $this;
    }

    /**
    * Gets physical
    *  物理模型。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ModelStatisticVO[]|null
    */
    public function getPhysical()
    {
        return $this->container['physical'];
    }

    /**
    * Sets physical
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ModelStatisticVO[]|null $physical 物理模型。
    *
    * @return $this
    */
    public function setPhysical($physical)
    {
        $this->container['physical'] = $physical;
        return $this;
    }

    /**
    * Gets dwr
    *  dwr
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ModelStatisticVO|null
    */
    public function getDwr()
    {
        return $this->container['dwr'];
    }

    /**
    * Sets dwr
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ModelStatisticVO|null $dwr dwr
    *
    * @return $this
    */
    public function setDwr($dwr)
    {
        $this->container['dwr'] = $dwr;
        return $this;
    }

    /**
    * Gets dm
    *  dm
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ModelStatisticVO|null
    */
    public function getDm()
    {
        return $this->container['dm'];
    }

    /**
    * Sets dm
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ModelStatisticVO|null $dm dm
    *
    * @return $this
    */
    public function setDm($dm)
    {
        $this->container['dm'] = $dm;
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

