<?php

namespace HuaweiCloud\SDK\Cdm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CdmClusterVersion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CdmClusterVersion';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * active  版本状态。
    * id  版本ID。
    * image  版本镜像。
    * name  版本名称。
    * packages  版本的包。
    * datastore  服务ID，用于区分不同服务。
    * links  链接信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'active' => 'string',
            'id' => 'string',
            'image' => 'string',
            'name' => 'string',
            'packages' => 'string',
            'datastore' => 'string',
            'links' => '\HuaweiCloud\SDK\Cdm\V1\Model\ClusterLinks[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * active  版本状态。
    * id  版本ID。
    * image  版本镜像。
    * name  版本名称。
    * packages  版本的包。
    * datastore  服务ID，用于区分不同服务。
    * links  链接信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'active' => null,
        'id' => null,
        'image' => null,
        'name' => null,
        'packages' => null,
        'datastore' => null,
        'links' => null
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
    * active  版本状态。
    * id  版本ID。
    * image  版本镜像。
    * name  版本名称。
    * packages  版本的包。
    * datastore  服务ID，用于区分不同服务。
    * links  链接信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'active' => 'active',
            'id' => 'id',
            'image' => 'image',
            'name' => 'name',
            'packages' => 'packages',
            'datastore' => 'datastore',
            'links' => 'links'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * active  版本状态。
    * id  版本ID。
    * image  版本镜像。
    * name  版本名称。
    * packages  版本的包。
    * datastore  服务ID，用于区分不同服务。
    * links  链接信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'active' => 'setActive',
            'id' => 'setId',
            'image' => 'setImage',
            'name' => 'setName',
            'packages' => 'setPackages',
            'datastore' => 'setDatastore',
            'links' => 'setLinks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * active  版本状态。
    * id  版本ID。
    * image  版本镜像。
    * name  版本名称。
    * packages  版本的包。
    * datastore  服务ID，用于区分不同服务。
    * links  链接信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'active' => 'getActive',
            'id' => 'getId',
            'image' => 'getImage',
            'name' => 'getName',
            'packages' => 'getPackages',
            'datastore' => 'getDatastore',
            'links' => 'getLinks'
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
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['packages'] = isset($data['packages']) ? $data['packages'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
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
    * Gets active
    *  版本状态。
    *
    * @return string|null
    */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
    * Sets active
    *
    * @param string|null $active 版本状态。
    *
    * @return $this
    */
    public function setActive($active)
    {
        $this->container['active'] = $active;
        return $this;
    }

    /**
    * Gets id
    *  版本ID。
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
    * @param string|null $id 版本ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets image
    *  版本镜像。
    *
    * @return string|null
    */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
    * Sets image
    *
    * @param string|null $image 版本镜像。
    *
    * @return $this
    */
    public function setImage($image)
    {
        $this->container['image'] = $image;
        return $this;
    }

    /**
    * Gets name
    *  版本名称。
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
    * @param string|null $name 版本名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets packages
    *  版本的包。
    *
    * @return string|null
    */
    public function getPackages()
    {
        return $this->container['packages'];
    }

    /**
    * Sets packages
    *
    * @param string|null $packages 版本的包。
    *
    * @return $this
    */
    public function setPackages($packages)
    {
        $this->container['packages'] = $packages;
        return $this;
    }

    /**
    * Gets datastore
    *  服务ID，用于区分不同服务。
    *
    * @return string|null
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param string|null $datastore 服务ID，用于区分不同服务。
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
        return $this;
    }

    /**
    * Gets links
    *  链接信息。
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\ClusterLinks[]|null
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\ClusterLinks[]|null $links 链接信息。
    *
    * @return $this
    */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
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

