<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageGroup';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**：镜像名称。 **取值范围**：不涉及。
    * createAt  **参数解释**：镜像创建的时间，单位：UTC毫秒。 **取值范围**：不涉及。
    * namespace  **参数解释**：镜像所属的SWR组织。 **取值范围**：不涉及。
    * updateAt  **参数解释**：镜像最后更新的时间，单位：UTC毫秒。 **取值范围**：不涉及。
    * versionCount  **参数解释**：镜像版本个数。 **取值范围**：不涉及。
    * description  **参数解释**：镜像描述信息。 **取值范围**：不涉及。
    * readMe  **参数解释**：镜像指导。 **取值范围**：不涉及。
    * iconName  **参数解释**：镜像图标名称。 **取值范围**：不涉及。
    * id  **参数解释**：镜像id。 **取值范围**：不涉及。
    * swrInstanceName  **参数解释**：SWR企业版镜像仓库名称。 **取值范围**：不涉及。
    * swrInstanceId  **参数解释**：SWR企业版镜像仓库ID。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'createAt' => 'int',
            'namespace' => 'string',
            'updateAt' => 'int',
            'versionCount' => 'int',
            'description' => 'string',
            'readMe' => 'string',
            'iconName' => 'string',
            'id' => 'string',
            'swrInstanceName' => 'string',
            'swrInstanceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**：镜像名称。 **取值范围**：不涉及。
    * createAt  **参数解释**：镜像创建的时间，单位：UTC毫秒。 **取值范围**：不涉及。
    * namespace  **参数解释**：镜像所属的SWR组织。 **取值范围**：不涉及。
    * updateAt  **参数解释**：镜像最后更新的时间，单位：UTC毫秒。 **取值范围**：不涉及。
    * versionCount  **参数解释**：镜像版本个数。 **取值范围**：不涉及。
    * description  **参数解释**：镜像描述信息。 **取值范围**：不涉及。
    * readMe  **参数解释**：镜像指导。 **取值范围**：不涉及。
    * iconName  **参数解释**：镜像图标名称。 **取值范围**：不涉及。
    * id  **参数解释**：镜像id。 **取值范围**：不涉及。
    * swrInstanceName  **参数解释**：SWR企业版镜像仓库名称。 **取值范围**：不涉及。
    * swrInstanceId  **参数解释**：SWR企业版镜像仓库ID。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'createAt' => 'int64',
        'namespace' => null,
        'updateAt' => 'int64',
        'versionCount' => 'int32',
        'description' => null,
        'readMe' => null,
        'iconName' => null,
        'id' => null,
        'swrInstanceName' => null,
        'swrInstanceId' => null
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
    * name  **参数解释**：镜像名称。 **取值范围**：不涉及。
    * createAt  **参数解释**：镜像创建的时间，单位：UTC毫秒。 **取值范围**：不涉及。
    * namespace  **参数解释**：镜像所属的SWR组织。 **取值范围**：不涉及。
    * updateAt  **参数解释**：镜像最后更新的时间，单位：UTC毫秒。 **取值范围**：不涉及。
    * versionCount  **参数解释**：镜像版本个数。 **取值范围**：不涉及。
    * description  **参数解释**：镜像描述信息。 **取值范围**：不涉及。
    * readMe  **参数解释**：镜像指导。 **取值范围**：不涉及。
    * iconName  **参数解释**：镜像图标名称。 **取值范围**：不涉及。
    * id  **参数解释**：镜像id。 **取值范围**：不涉及。
    * swrInstanceName  **参数解释**：SWR企业版镜像仓库名称。 **取值范围**：不涉及。
    * swrInstanceId  **参数解释**：SWR企业版镜像仓库ID。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'createAt' => 'create_at',
            'namespace' => 'namespace',
            'updateAt' => 'update_at',
            'versionCount' => 'version_count',
            'description' => 'description',
            'readMe' => 'read_me',
            'iconName' => 'icon_name',
            'id' => 'id',
            'swrInstanceName' => 'swr_instance_name',
            'swrInstanceId' => 'swr_instance_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**：镜像名称。 **取值范围**：不涉及。
    * createAt  **参数解释**：镜像创建的时间，单位：UTC毫秒。 **取值范围**：不涉及。
    * namespace  **参数解释**：镜像所属的SWR组织。 **取值范围**：不涉及。
    * updateAt  **参数解释**：镜像最后更新的时间，单位：UTC毫秒。 **取值范围**：不涉及。
    * versionCount  **参数解释**：镜像版本个数。 **取值范围**：不涉及。
    * description  **参数解释**：镜像描述信息。 **取值范围**：不涉及。
    * readMe  **参数解释**：镜像指导。 **取值范围**：不涉及。
    * iconName  **参数解释**：镜像图标名称。 **取值范围**：不涉及。
    * id  **参数解释**：镜像id。 **取值范围**：不涉及。
    * swrInstanceName  **参数解释**：SWR企业版镜像仓库名称。 **取值范围**：不涉及。
    * swrInstanceId  **参数解释**：SWR企业版镜像仓库ID。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'createAt' => 'setCreateAt',
            'namespace' => 'setNamespace',
            'updateAt' => 'setUpdateAt',
            'versionCount' => 'setVersionCount',
            'description' => 'setDescription',
            'readMe' => 'setReadMe',
            'iconName' => 'setIconName',
            'id' => 'setId',
            'swrInstanceName' => 'setSwrInstanceName',
            'swrInstanceId' => 'setSwrInstanceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**：镜像名称。 **取值范围**：不涉及。
    * createAt  **参数解释**：镜像创建的时间，单位：UTC毫秒。 **取值范围**：不涉及。
    * namespace  **参数解释**：镜像所属的SWR组织。 **取值范围**：不涉及。
    * updateAt  **参数解释**：镜像最后更新的时间，单位：UTC毫秒。 **取值范围**：不涉及。
    * versionCount  **参数解释**：镜像版本个数。 **取值范围**：不涉及。
    * description  **参数解释**：镜像描述信息。 **取值范围**：不涉及。
    * readMe  **参数解释**：镜像指导。 **取值范围**：不涉及。
    * iconName  **参数解释**：镜像图标名称。 **取值范围**：不涉及。
    * id  **参数解释**：镜像id。 **取值范围**：不涉及。
    * swrInstanceName  **参数解释**：SWR企业版镜像仓库名称。 **取值范围**：不涉及。
    * swrInstanceId  **参数解释**：SWR企业版镜像仓库ID。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'createAt' => 'getCreateAt',
            'namespace' => 'getNamespace',
            'updateAt' => 'getUpdateAt',
            'versionCount' => 'getVersionCount',
            'description' => 'getDescription',
            'readMe' => 'getReadMe',
            'iconName' => 'getIconName',
            'id' => 'getId',
            'swrInstanceName' => 'getSwrInstanceName',
            'swrInstanceId' => 'getSwrInstanceId'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['versionCount'] = isset($data['versionCount']) ? $data['versionCount'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['readMe'] = isset($data['readMe']) ? $data['readMe'] : null;
        $this->container['iconName'] = isset($data['iconName']) ? $data['iconName'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['swrInstanceName'] = isset($data['swrInstanceName']) ? $data['swrInstanceName'] : null;
        $this->container['swrInstanceId'] = isset($data['swrInstanceId']) ? $data['swrInstanceId'] : null;
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
    * Gets name
    *  **参数解释**：镜像名称。 **取值范围**：不涉及。
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
    * @param string|null $name **参数解释**：镜像名称。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets createAt
    *  **参数解释**：镜像创建的时间，单位：UTC毫秒。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param int|null $createAt **参数解释**：镜像创建的时间，单位：UTC毫秒。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets namespace
    *  **参数解释**：镜像所属的SWR组织。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace **参数解释**：镜像所属的SWR组织。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets updateAt
    *  **参数解释**：镜像最后更新的时间，单位：UTC毫秒。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param int|null $updateAt **参数解释**：镜像最后更新的时间，单位：UTC毫秒。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
        return $this;
    }

    /**
    * Gets versionCount
    *  **参数解释**：镜像版本个数。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getVersionCount()
    {
        return $this->container['versionCount'];
    }

    /**
    * Sets versionCount
    *
    * @param int|null $versionCount **参数解释**：镜像版本个数。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setVersionCount($versionCount)
    {
        $this->container['versionCount'] = $versionCount;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**：镜像描述信息。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释**：镜像描述信息。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets readMe
    *  **参数解释**：镜像指导。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getReadMe()
    {
        return $this->container['readMe'];
    }

    /**
    * Sets readMe
    *
    * @param string|null $readMe **参数解释**：镜像指导。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setReadMe($readMe)
    {
        $this->container['readMe'] = $readMe;
        return $this;
    }

    /**
    * Gets iconName
    *  **参数解释**：镜像图标名称。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getIconName()
    {
        return $this->container['iconName'];
    }

    /**
    * Sets iconName
    *
    * @param string|null $iconName **参数解释**：镜像图标名称。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setIconName($iconName)
    {
        $this->container['iconName'] = $iconName;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**：镜像id。 **取值范围**：不涉及。
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
    * @param string|null $id **参数解释**：镜像id。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets swrInstanceName
    *  **参数解释**：SWR企业版镜像仓库名称。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getSwrInstanceName()
    {
        return $this->container['swrInstanceName'];
    }

    /**
    * Sets swrInstanceName
    *
    * @param string|null $swrInstanceName **参数解释**：SWR企业版镜像仓库名称。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setSwrInstanceName($swrInstanceName)
    {
        $this->container['swrInstanceName'] = $swrInstanceName;
        return $this;
    }

    /**
    * Gets swrInstanceId
    *  **参数解释**：SWR企业版镜像仓库ID。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getSwrInstanceId()
    {
        return $this->container['swrInstanceId'];
    }

    /**
    * Sets swrInstanceId
    *
    * @param string|null $swrInstanceId **参数解释**：SWR企业版镜像仓库ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setSwrInstanceId($swrInstanceId)
    {
        $this->container['swrInstanceId'] = $swrInstanceId;
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

