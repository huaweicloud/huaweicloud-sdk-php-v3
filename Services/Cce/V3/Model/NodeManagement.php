<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeManagement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeManagement';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serverGroupReference  **参数解释**： 云服务器组ID，指定后将绑定云服务器组，节点池中所有节点将创建在该云服务器组下。绑定云服务器组后节点池中的节点数量不允许超出云服务器组可添加的云服务器数量，否则将导致节点池无法扩容。 > - 绑定云服务器组后，云服务器将严格按照亲和策略分布，同时也会限制节点池中节点个数上限。由于ECS创建云服务器时本身具有一定反亲和能力，如果仅需云服务器分散的创建在不同主机上以提高业务的可靠性，又不希望节点个数受到云服务器组的限制，请勿绑定云服务器组。 > - 云服务组支持解绑，解绑后存量节点仍属于原云服务器组，新建节点将不再绑定云服务器组。 当节点池中不存在节点时支持绑定新的云服务器组或者切换绑定的云服务器组  **约束限制**： 指定云服务器组时节点池中的节点数量不允许超出云服务器组的配额限制。 **取值范围**： - 不指定或者指定空字符串：表示解绑云服务器组 - 云服务器组ID：表示切换节点池绑定的云服务组  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serverGroupReference' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serverGroupReference  **参数解释**： 云服务器组ID，指定后将绑定云服务器组，节点池中所有节点将创建在该云服务器组下。绑定云服务器组后节点池中的节点数量不允许超出云服务器组可添加的云服务器数量，否则将导致节点池无法扩容。 > - 绑定云服务器组后，云服务器将严格按照亲和策略分布，同时也会限制节点池中节点个数上限。由于ECS创建云服务器时本身具有一定反亲和能力，如果仅需云服务器分散的创建在不同主机上以提高业务的可靠性，又不希望节点个数受到云服务器组的限制，请勿绑定云服务器组。 > - 云服务组支持解绑，解绑后存量节点仍属于原云服务器组，新建节点将不再绑定云服务器组。 当节点池中不存在节点时支持绑定新的云服务器组或者切换绑定的云服务器组  **约束限制**： 指定云服务器组时节点池中的节点数量不允许超出云服务器组的配额限制。 **取值范围**： - 不指定或者指定空字符串：表示解绑云服务器组 - 云服务器组ID：表示切换节点池绑定的云服务组  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serverGroupReference' => null
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
    * serverGroupReference  **参数解释**： 云服务器组ID，指定后将绑定云服务器组，节点池中所有节点将创建在该云服务器组下。绑定云服务器组后节点池中的节点数量不允许超出云服务器组可添加的云服务器数量，否则将导致节点池无法扩容。 > - 绑定云服务器组后，云服务器将严格按照亲和策略分布，同时也会限制节点池中节点个数上限。由于ECS创建云服务器时本身具有一定反亲和能力，如果仅需云服务器分散的创建在不同主机上以提高业务的可靠性，又不希望节点个数受到云服务器组的限制，请勿绑定云服务器组。 > - 云服务组支持解绑，解绑后存量节点仍属于原云服务器组，新建节点将不再绑定云服务器组。 当节点池中不存在节点时支持绑定新的云服务器组或者切换绑定的云服务器组  **约束限制**： 指定云服务器组时节点池中的节点数量不允许超出云服务器组的配额限制。 **取值范围**： - 不指定或者指定空字符串：表示解绑云服务器组 - 云服务器组ID：表示切换节点池绑定的云服务组  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serverGroupReference' => 'serverGroupReference'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serverGroupReference  **参数解释**： 云服务器组ID，指定后将绑定云服务器组，节点池中所有节点将创建在该云服务器组下。绑定云服务器组后节点池中的节点数量不允许超出云服务器组可添加的云服务器数量，否则将导致节点池无法扩容。 > - 绑定云服务器组后，云服务器将严格按照亲和策略分布，同时也会限制节点池中节点个数上限。由于ECS创建云服务器时本身具有一定反亲和能力，如果仅需云服务器分散的创建在不同主机上以提高业务的可靠性，又不希望节点个数受到云服务器组的限制，请勿绑定云服务器组。 > - 云服务组支持解绑，解绑后存量节点仍属于原云服务器组，新建节点将不再绑定云服务器组。 当节点池中不存在节点时支持绑定新的云服务器组或者切换绑定的云服务器组  **约束限制**： 指定云服务器组时节点池中的节点数量不允许超出云服务器组的配额限制。 **取值范围**： - 不指定或者指定空字符串：表示解绑云服务器组 - 云服务器组ID：表示切换节点池绑定的云服务组  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'serverGroupReference' => 'setServerGroupReference'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serverGroupReference  **参数解释**： 云服务器组ID，指定后将绑定云服务器组，节点池中所有节点将创建在该云服务器组下。绑定云服务器组后节点池中的节点数量不允许超出云服务器组可添加的云服务器数量，否则将导致节点池无法扩容。 > - 绑定云服务器组后，云服务器将严格按照亲和策略分布，同时也会限制节点池中节点个数上限。由于ECS创建云服务器时本身具有一定反亲和能力，如果仅需云服务器分散的创建在不同主机上以提高业务的可靠性，又不希望节点个数受到云服务器组的限制，请勿绑定云服务器组。 > - 云服务组支持解绑，解绑后存量节点仍属于原云服务器组，新建节点将不再绑定云服务器组。 当节点池中不存在节点时支持绑定新的云服务器组或者切换绑定的云服务器组  **约束限制**： 指定云服务器组时节点池中的节点数量不允许超出云服务器组的配额限制。 **取值范围**： - 不指定或者指定空字符串：表示解绑云服务器组 - 云服务器组ID：表示切换节点池绑定的云服务组  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'serverGroupReference' => 'getServerGroupReference'
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
        $this->container['serverGroupReference'] = isset($data['serverGroupReference']) ? $data['serverGroupReference'] : null;
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
    * Gets serverGroupReference
    *  **参数解释**： 云服务器组ID，指定后将绑定云服务器组，节点池中所有节点将创建在该云服务器组下。绑定云服务器组后节点池中的节点数量不允许超出云服务器组可添加的云服务器数量，否则将导致节点池无法扩容。 > - 绑定云服务器组后，云服务器将严格按照亲和策略分布，同时也会限制节点池中节点个数上限。由于ECS创建云服务器时本身具有一定反亲和能力，如果仅需云服务器分散的创建在不同主机上以提高业务的可靠性，又不希望节点个数受到云服务器组的限制，请勿绑定云服务器组。 > - 云服务组支持解绑，解绑后存量节点仍属于原云服务器组，新建节点将不再绑定云服务器组。 当节点池中不存在节点时支持绑定新的云服务器组或者切换绑定的云服务器组  **约束限制**： 指定云服务器组时节点池中的节点数量不允许超出云服务器组的配额限制。 **取值范围**： - 不指定或者指定空字符串：表示解绑云服务器组 - 云服务器组ID：表示切换节点池绑定的云服务组  **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getServerGroupReference()
    {
        return $this->container['serverGroupReference'];
    }

    /**
    * Sets serverGroupReference
    *
    * @param string|null $serverGroupReference **参数解释**： 云服务器组ID，指定后将绑定云服务器组，节点池中所有节点将创建在该云服务器组下。绑定云服务器组后节点池中的节点数量不允许超出云服务器组可添加的云服务器数量，否则将导致节点池无法扩容。 > - 绑定云服务器组后，云服务器将严格按照亲和策略分布，同时也会限制节点池中节点个数上限。由于ECS创建云服务器时本身具有一定反亲和能力，如果仅需云服务器分散的创建在不同主机上以提高业务的可靠性，又不希望节点个数受到云服务器组的限制，请勿绑定云服务器组。 > - 云服务组支持解绑，解绑后存量节点仍属于原云服务器组，新建节点将不再绑定云服务器组。 当节点池中不存在节点时支持绑定新的云服务器组或者切换绑定的云服务器组  **约束限制**： 指定云服务器组时节点池中的节点数量不允许超出云服务器组的配额限制。 **取值范围**： - 不指定或者指定空字符串：表示解绑云服务器组 - 云服务器组ID：表示切换节点池绑定的云服务组  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setServerGroupReference($serverGroupReference)
    {
        $this->container['serverGroupReference'] = $serverGroupReference;
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

