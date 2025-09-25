<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckAgencyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckAgencyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 代理id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 代理名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * version  **参数解释：** 版本 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * duration  **参数解释：** 代理存在时间段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * domainId  **参数解释：** 使用代理的domainid **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * isValid  **参数解释：** 代理是否合法 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'version' => 'string',
            'duration' => 'string',
            'domainId' => 'string',
            'isValid' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 代理id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 代理名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * version  **参数解释：** 版本 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * duration  **参数解释：** 代理存在时间段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * domainId  **参数解释：** 使用代理的domainid **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * isValid  **参数解释：** 代理是否合法 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'version' => null,
        'duration' => null,
        'domainId' => null,
        'isValid' => null
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
    * id  **参数解释：** 代理id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 代理名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * version  **参数解释：** 版本 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * duration  **参数解释：** 代理存在时间段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * domainId  **参数解释：** 使用代理的domainid **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * isValid  **参数解释：** 代理是否合法 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'version' => 'version',
            'duration' => 'duration',
            'domainId' => 'domain_id',
            'isValid' => 'is_valid'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 代理id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 代理名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * version  **参数解释：** 版本 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * duration  **参数解释：** 代理存在时间段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * domainId  **参数解释：** 使用代理的domainid **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * isValid  **参数解释：** 代理是否合法 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'version' => 'setVersion',
            'duration' => 'setDuration',
            'domainId' => 'setDomainId',
            'isValid' => 'setIsValid'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 代理id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 代理名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * version  **参数解释：** 版本 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * duration  **参数解释：** 代理存在时间段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * domainId  **参数解释：** 使用代理的domainid **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * isValid  **参数解释：** 代理是否合法 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'version' => 'getVersion',
            'duration' => 'getDuration',
            'domainId' => 'getDomainId',
            'isValid' => 'getIsValid'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['isValid'] = isset($data['isValid']) ? $data['isValid'] : null;
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
    * Gets id
    *  **参数解释：** 代理id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释：** 代理id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 代理名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释：** 代理名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释：** 版本 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version **参数解释：** 版本 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets duration
    *  **参数解释：** 代理存在时间段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param string|null $duration **参数解释：** 代理存在时间段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets domainId
    *  **参数解释：** 使用代理的domainid **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId **参数解释：** 使用代理的domainid **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets isValid
    *  **参数解释：** 代理是否合法 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return bool|null
    */
    public function getIsValid()
    {
        return $this->container['isValid'];
    }

    /**
    * Sets isValid
    *
    * @param bool|null $isValid **参数解释：** 代理是否合法 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setIsValid($isValid)
    {
        $this->container['isValid'] = $isValid;
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

