<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SyncResourceAgentReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SyncResourceAgentReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceInfos  **参数解释：** 资源信息。 **约束限制：** 不涉及。 **取值范围：** 选择需要同步的资源对应的资源信息，列表大小1~100之间。 **默认取值：** 不涉及。
    * vendor  **参数解释：** 云厂商。 **约束限制：** 不涉及。 **取值范围：** - 华为云资源同步时，可以不传。 - 阿里云资源同步时，传ALI。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceInfos' => '\HuaweiCloud\SDK\Coc\V1\Model\SyncResourceAgentReqResourceInfos[]',
            'vendor' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceInfos  **参数解释：** 资源信息。 **约束限制：** 不涉及。 **取值范围：** 选择需要同步的资源对应的资源信息，列表大小1~100之间。 **默认取值：** 不涉及。
    * vendor  **参数解释：** 云厂商。 **约束限制：** 不涉及。 **取值范围：** - 华为云资源同步时，可以不传。 - 阿里云资源同步时，传ALI。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceInfos' => null,
        'vendor' => null
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
    * resourceInfos  **参数解释：** 资源信息。 **约束限制：** 不涉及。 **取值范围：** 选择需要同步的资源对应的资源信息，列表大小1~100之间。 **默认取值：** 不涉及。
    * vendor  **参数解释：** 云厂商。 **约束限制：** 不涉及。 **取值范围：** - 华为云资源同步时，可以不传。 - 阿里云资源同步时，传ALI。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceInfos' => 'resource_infos',
            'vendor' => 'vendor'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceInfos  **参数解释：** 资源信息。 **约束限制：** 不涉及。 **取值范围：** 选择需要同步的资源对应的资源信息，列表大小1~100之间。 **默认取值：** 不涉及。
    * vendor  **参数解释：** 云厂商。 **约束限制：** 不涉及。 **取值范围：** - 华为云资源同步时，可以不传。 - 阿里云资源同步时，传ALI。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceInfos' => 'setResourceInfos',
            'vendor' => 'setVendor'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceInfos  **参数解释：** 资源信息。 **约束限制：** 不涉及。 **取值范围：** 选择需要同步的资源对应的资源信息，列表大小1~100之间。 **默认取值：** 不涉及。
    * vendor  **参数解释：** 云厂商。 **约束限制：** 不涉及。 **取值范围：** - 华为云资源同步时，可以不传。 - 阿里云资源同步时，传ALI。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceInfos' => 'getResourceInfos',
            'vendor' => 'getVendor'
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
        $this->container['resourceInfos'] = isset($data['resourceInfos']) ? $data['resourceInfos'] : null;
        $this->container['vendor'] = isset($data['vendor']) ? $data['vendor'] : null;
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
    * Gets resourceInfos
    *  **参数解释：** 资源信息。 **约束限制：** 不涉及。 **取值范围：** 选择需要同步的资源对应的资源信息，列表大小1~100之间。 **默认取值：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\SyncResourceAgentReqResourceInfos[]|null
    */
    public function getResourceInfos()
    {
        return $this->container['resourceInfos'];
    }

    /**
    * Sets resourceInfos
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\SyncResourceAgentReqResourceInfos[]|null $resourceInfos **参数解释：** 资源信息。 **约束限制：** 不涉及。 **取值范围：** 选择需要同步的资源对应的资源信息，列表大小1~100之间。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setResourceInfos($resourceInfos)
    {
        $this->container['resourceInfos'] = $resourceInfos;
        return $this;
    }

    /**
    * Gets vendor
    *  **参数解释：** 云厂商。 **约束限制：** 不涉及。 **取值范围：** - 华为云资源同步时，可以不传。 - 阿里云资源同步时，传ALI。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getVendor()
    {
        return $this->container['vendor'];
    }

    /**
    * Sets vendor
    *
    * @param string|null $vendor **参数解释：** 云厂商。 **约束限制：** 不涉及。 **取值范围：** - 华为云资源同步时，可以不传。 - 阿里云资源同步时，传ALI。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setVendor($vendor)
    {
        $this->container['vendor'] = $vendor;
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

