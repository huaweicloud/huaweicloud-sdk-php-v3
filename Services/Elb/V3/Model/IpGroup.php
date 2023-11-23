<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IpGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IpGroup';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createdAt  IP地址组的创建时间。
    * description  IP地址组的描述信息。
    * id  IP地址组的ID。
    * ipList  IP地址组中包含的IP或网段列表。[]表示任意IP。
    * listeners  与IP地址组关联的监听器的ID列表。
    * name  IP地址组的名称。
    * projectId  IP地址组的项目ID。
    * updatedAt  IP地址组的更新时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createdAt' => 'string',
            'description' => 'string',
            'id' => 'string',
            'ipList' => '\HuaweiCloud\SDK\Elb\V3\Model\IpInfo[]',
            'listeners' => '\HuaweiCloud\SDK\Elb\V3\Model\ListenerRef[]',
            'name' => 'string',
            'projectId' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createdAt  IP地址组的创建时间。
    * description  IP地址组的描述信息。
    * id  IP地址组的ID。
    * ipList  IP地址组中包含的IP或网段列表。[]表示任意IP。
    * listeners  与IP地址组关联的监听器的ID列表。
    * name  IP地址组的名称。
    * projectId  IP地址组的项目ID。
    * updatedAt  IP地址组的更新时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createdAt' => null,
        'description' => null,
        'id' => null,
        'ipList' => null,
        'listeners' => null,
        'name' => null,
        'projectId' => null,
        'updatedAt' => null
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
    * createdAt  IP地址组的创建时间。
    * description  IP地址组的描述信息。
    * id  IP地址组的ID。
    * ipList  IP地址组中包含的IP或网段列表。[]表示任意IP。
    * listeners  与IP地址组关联的监听器的ID列表。
    * name  IP地址组的名称。
    * projectId  IP地址组的项目ID。
    * updatedAt  IP地址组的更新时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createdAt' => 'created_at',
            'description' => 'description',
            'id' => 'id',
            'ipList' => 'ip_list',
            'listeners' => 'listeners',
            'name' => 'name',
            'projectId' => 'project_id',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createdAt  IP地址组的创建时间。
    * description  IP地址组的描述信息。
    * id  IP地址组的ID。
    * ipList  IP地址组中包含的IP或网段列表。[]表示任意IP。
    * listeners  与IP地址组关联的监听器的ID列表。
    * name  IP地址组的名称。
    * projectId  IP地址组的项目ID。
    * updatedAt  IP地址组的更新时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'createdAt' => 'setCreatedAt',
            'description' => 'setDescription',
            'id' => 'setId',
            'ipList' => 'setIpList',
            'listeners' => 'setListeners',
            'name' => 'setName',
            'projectId' => 'setProjectId',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createdAt  IP地址组的创建时间。
    * description  IP地址组的描述信息。
    * id  IP地址组的ID。
    * ipList  IP地址组中包含的IP或网段列表。[]表示任意IP。
    * listeners  与IP地址组关联的监听器的ID列表。
    * name  IP地址组的名称。
    * projectId  IP地址组的项目ID。
    * updatedAt  IP地址组的更新时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'createdAt' => 'getCreatedAt',
            'description' => 'getDescription',
            'id' => 'getId',
            'ipList' => 'getIpList',
            'listeners' => 'getListeners',
            'name' => 'getName',
            'projectId' => 'getProjectId',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ipList'] = isset($data['ipList']) ? $data['ipList'] : null;
        $this->container['listeners'] = isset($data['listeners']) ? $data['listeners'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['ipList'] === null) {
            $invalidProperties[] = "'ipList' can't be null";
        }
        if ($this->container['listeners'] === null) {
            $invalidProperties[] = "'listeners' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
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
    * Gets createdAt
    *  IP地址组的创建时间。
    *
    * @return string
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string $createdAt IP地址组的创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets description
    *  IP地址组的描述信息。
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description IP地址组的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets id
    *  IP地址组的ID。
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
    * @param string $id IP地址组的ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets ipList
    *  IP地址组中包含的IP或网段列表。[]表示任意IP。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\IpInfo[]
    */
    public function getIpList()
    {
        return $this->container['ipList'];
    }

    /**
    * Sets ipList
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\IpInfo[] $ipList IP地址组中包含的IP或网段列表。[]表示任意IP。
    *
    * @return $this
    */
    public function setIpList($ipList)
    {
        $this->container['ipList'] = $ipList;
        return $this;
    }

    /**
    * Gets listeners
    *  与IP地址组关联的监听器的ID列表。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\ListenerRef[]
    */
    public function getListeners()
    {
        return $this->container['listeners'];
    }

    /**
    * Sets listeners
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\ListenerRef[] $listeners 与IP地址组关联的监听器的ID列表。
    *
    * @return $this
    */
    public function setListeners($listeners)
    {
        $this->container['listeners'] = $listeners;
        return $this;
    }

    /**
    * Gets name
    *  IP地址组的名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name IP地址组的名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets projectId
    *  IP地址组的项目ID。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId IP地址组的项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets updatedAt
    *  IP地址组的更新时间。
    *
    * @return string
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string $updatedAt IP地址组的更新时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

