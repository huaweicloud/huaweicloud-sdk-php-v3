<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DbHotfixInfoResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DbHotfixInfoResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  **参数解释**： 热补丁版本。 **取值范围**： 不涉及。
    * createTime  **参数解释**： 热补丁的创建时间，UNIX时间戳格式，单位是毫秒。 **取值范围**： 不涉及。
    * deployModes  **参数解释**： 可升级该补丁的实例部署形态信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'string',
            'createTime' => 'int',
            'deployModes' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\HotfixDeployMode[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  **参数解释**： 热补丁版本。 **取值范围**： 不涉及。
    * createTime  **参数解释**： 热补丁的创建时间，UNIX时间戳格式，单位是毫秒。 **取值范围**： 不涉及。
    * deployModes  **参数解释**： 可升级该补丁的实例部署形态信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'createTime' => 'int64',
        'deployModes' => null
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
    * version  **参数解释**： 热补丁版本。 **取值范围**： 不涉及。
    * createTime  **参数解释**： 热补丁的创建时间，UNIX时间戳格式，单位是毫秒。 **取值范围**： 不涉及。
    * deployModes  **参数解释**： 可升级该补丁的实例部署形态信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'createTime' => 'create_time',
            'deployModes' => 'deploy_modes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  **参数解释**： 热补丁版本。 **取值范围**： 不涉及。
    * createTime  **参数解释**： 热补丁的创建时间，UNIX时间戳格式，单位是毫秒。 **取值范围**： 不涉及。
    * deployModes  **参数解释**： 可升级该补丁的实例部署形态信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'createTime' => 'setCreateTime',
            'deployModes' => 'setDeployModes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  **参数解释**： 热补丁版本。 **取值范围**： 不涉及。
    * createTime  **参数解释**： 热补丁的创建时间，UNIX时间戳格式，单位是毫秒。 **取值范围**： 不涉及。
    * deployModes  **参数解释**： 可升级该补丁的实例部署形态信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'createTime' => 'getCreateTime',
            'deployModes' => 'getDeployModes'
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['deployModes'] = isset($data['deployModes']) ? $data['deployModes'] : null;
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
    * Gets version
    *  **参数解释**： 热补丁版本。 **取值范围**： 不涉及。
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
    * @param string|null $version **参数解释**： 热补丁版本。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释**： 热补丁的创建时间，UNIX时间戳格式，单位是毫秒。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime **参数解释**： 热补丁的创建时间，UNIX时间戳格式，单位是毫秒。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets deployModes
    *  **参数解释**： 可升级该补丁的实例部署形态信息。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\HotfixDeployMode[]|null
    */
    public function getDeployModes()
    {
        return $this->container['deployModes'];
    }

    /**
    * Sets deployModes
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\HotfixDeployMode[]|null $deployModes **参数解释**： 可升级该补丁的实例部署形态信息。
    *
    * @return $this
    */
    public function setDeployModes($deployModes)
    {
        $this->container['deployModes'] = $deployModes;
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

