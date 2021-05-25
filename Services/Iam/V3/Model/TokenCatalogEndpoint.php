<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TokenCatalogEndpoint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TokenCatalogEndpoint';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * url  终端节点的URL。
    * region  终端节点所属区域。
    * regionId  终端节点所属区域ID。
    * interface  接口类型，描述接口在该终端节点的可见性。值为“public”，表示该接口为公开接口。
    * id  终端节点ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'url' => 'string',
            'region' => 'string',
            'regionId' => 'string',
            'interface' => 'string',
            'id' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * url  终端节点的URL。
    * region  终端节点所属区域。
    * regionId  终端节点所属区域ID。
    * interface  接口类型，描述接口在该终端节点的可见性。值为“public”，表示该接口为公开接口。
    * id  终端节点ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'url' => null,
        'region' => null,
        'regionId' => null,
        'interface' => null,
        'id' => null
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
    * url  终端节点的URL。
    * region  终端节点所属区域。
    * regionId  终端节点所属区域ID。
    * interface  接口类型，描述接口在该终端节点的可见性。值为“public”，表示该接口为公开接口。
    * id  终端节点ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'url' => 'url',
            'region' => 'region',
            'regionId' => 'region_id',
            'interface' => 'interface',
            'id' => 'id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * url  终端节点的URL。
    * region  终端节点所属区域。
    * regionId  终端节点所属区域ID。
    * interface  接口类型，描述接口在该终端节点的可见性。值为“public”，表示该接口为公开接口。
    * id  终端节点ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'url' => 'setUrl',
            'region' => 'setRegion',
            'regionId' => 'setRegionId',
            'interface' => 'setInterface',
            'id' => 'setId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * url  终端节点的URL。
    * region  终端节点所属区域。
    * regionId  终端节点所属区域ID。
    * interface  接口类型，描述接口在该终端节点的可见性。值为“public”，表示该接口为公开接口。
    * id  终端节点ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'url' => 'getUrl',
            'region' => 'getRegion',
            'regionId' => 'getRegionId',
            'interface' => 'getInterface',
            'id' => 'getId'
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['interface'] = isset($data['interface']) ? $data['interface'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
        if ($this->container['interface'] === null) {
            $invalidProperties[] = "'interface' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
    * Gets url
    *  终端节点的URL。
    *
    * @return string
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string $url 终端节点的URL。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets region
    *  终端节点所属区域。
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region 终端节点所属区域。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets regionId
    *  终端节点所属区域ID。
    *
    * @return string
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string $regionId 终端节点所属区域ID。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets interface
    *  接口类型，描述接口在该终端节点的可见性。值为“public”，表示该接口为公开接口。
    *
    * @return string
    */
    public function getInterface()
    {
        return $this->container['interface'];
    }

    /**
    * Sets interface
    *
    * @param string $interface 接口类型，描述接口在该终端节点的可见性。值为“public”，表示该接口为公开接口。
    *
    * @return $this
    */
    public function setInterface($interface)
    {
        $this->container['interface'] = $interface;
        return $this;
    }

    /**
    * Gets id
    *  终端节点ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 终端节点ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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

