<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CentralNetwork implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CentralNetwork';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID。
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * domainId  实例所属账号ID。
    * state  state
    * enterpriseProjectId  实例所属企业项目ID。
    * tags  实例标签。
    * defaultPlaneId  中心网络默认平面的ID。
    * planes  中心网平面列表。
    * erInstances  中心网ER实例列表。
    * connections  中心网ER连接列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'domainId' => 'string',
            'state' => '\HuaweiCloud\SDK\Cc\V3\Model\CentralNetworkStateEnum',
            'enterpriseProjectId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Cc\V3\Model\Tag[]',
            'defaultPlaneId' => 'string',
            'planes' => '\HuaweiCloud\SDK\Cc\V3\Model\CentralNetworkPlane[]',
            'erInstances' => '\HuaweiCloud\SDK\Cc\V3\Model\CentralNetworkErInstance[]',
            'connections' => '\HuaweiCloud\SDK\Cc\V3\Model\CentralNetworkConnectionInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID。
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * domainId  实例所属账号ID。
    * state  state
    * enterpriseProjectId  实例所属企业项目ID。
    * tags  实例标签。
    * defaultPlaneId  中心网络默认平面的ID。
    * planes  中心网平面列表。
    * erInstances  中心网ER实例列表。
    * connections  中心网ER连接列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'domainId' => null,
        'state' => null,
        'enterpriseProjectId' => null,
        'tags' => null,
        'defaultPlaneId' => null,
        'planes' => null,
        'erInstances' => null,
        'connections' => null
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
    * id  实例ID。
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * domainId  实例所属账号ID。
    * state  state
    * enterpriseProjectId  实例所属企业项目ID。
    * tags  实例标签。
    * defaultPlaneId  中心网络默认平面的ID。
    * planes  中心网平面列表。
    * erInstances  中心网ER实例列表。
    * connections  中心网ER连接列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'domainId' => 'domain_id',
            'state' => 'state',
            'enterpriseProjectId' => 'enterprise_project_id',
            'tags' => 'tags',
            'defaultPlaneId' => 'default_plane_id',
            'planes' => 'planes',
            'erInstances' => 'er_instances',
            'connections' => 'connections'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID。
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * domainId  实例所属账号ID。
    * state  state
    * enterpriseProjectId  实例所属企业项目ID。
    * tags  实例标签。
    * defaultPlaneId  中心网络默认平面的ID。
    * planes  中心网平面列表。
    * erInstances  中心网ER实例列表。
    * connections  中心网ER连接列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'domainId' => 'setDomainId',
            'state' => 'setState',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'tags' => 'setTags',
            'defaultPlaneId' => 'setDefaultPlaneId',
            'planes' => 'setPlanes',
            'erInstances' => 'setErInstances',
            'connections' => 'setConnections'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID。
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * domainId  实例所属账号ID。
    * state  state
    * enterpriseProjectId  实例所属企业项目ID。
    * tags  实例标签。
    * defaultPlaneId  中心网络默认平面的ID。
    * planes  中心网平面列表。
    * erInstances  中心网ER实例列表。
    * connections  中心网ER连接列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'domainId' => 'getDomainId',
            'state' => 'getState',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'tags' => 'getTags',
            'defaultPlaneId' => 'getDefaultPlaneId',
            'planes' => 'getPlanes',
            'erInstances' => 'getErInstances',
            'connections' => 'getConnections'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['defaultPlaneId'] = isset($data['defaultPlaneId']) ? $data['defaultPlaneId'] : null;
        $this->container['planes'] = isset($data['planes']) ? $data['planes'] : null;
        $this->container['erInstances'] = isset($data['erInstances']) ? $data['erInstances'] : null;
        $this->container['connections'] = isset($data['connections']) ? $data['connections'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['id']) < 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[^<>]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[^<>]*$/.";
            }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
            if ((mb_strlen($this->container['domainId']) > 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['domainId']) < 10)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 10.";
            }
            if (!preg_match("/[a-fA-F0-9]{10,32}/", $this->container['domainId'])) {
                $invalidProperties[] = "invalid value for 'domainId', must be conform to the pattern /[a-fA-F0-9]{10,32}/.";
            }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/0|[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /0|[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['defaultPlaneId'] === null) {
            $invalidProperties[] = "'defaultPlaneId' can't be null";
        }
            if ((mb_strlen($this->container['defaultPlaneId']) > 36)) {
                $invalidProperties[] = "invalid value for 'defaultPlaneId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['defaultPlaneId']) < 36)) {
                $invalidProperties[] = "invalid value for 'defaultPlaneId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['defaultPlaneId'])) {
                $invalidProperties[] = "invalid value for 'defaultPlaneId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
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
    * Gets id
    *  实例ID。
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
    * @param string $id 实例ID。
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
    *  实例名字。
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
    * @param string $name 实例名字。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  实例描述。不支持 <>。
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
    * @param string|null $description 实例描述。不支持 <>。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createdAt
    *  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return \DateTime
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime $createdAt 实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return \DateTime
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime $updatedAt 实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets domainId
    *  实例所属账号ID。
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId 实例所属账号ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets state
    *  state
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\CentralNetworkStateEnum
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\CentralNetworkStateEnum $state state
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  实例所属企业项目ID。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 实例所属企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets tags
    *  实例标签。
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\Tag[]|null $tags 实例标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets defaultPlaneId
    *  中心网络默认平面的ID。
    *
    * @return string
    */
    public function getDefaultPlaneId()
    {
        return $this->container['defaultPlaneId'];
    }

    /**
    * Sets defaultPlaneId
    *
    * @param string $defaultPlaneId 中心网络默认平面的ID。
    *
    * @return $this
    */
    public function setDefaultPlaneId($defaultPlaneId)
    {
        $this->container['defaultPlaneId'] = $defaultPlaneId;
        return $this;
    }

    /**
    * Gets planes
    *  中心网平面列表。
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\CentralNetworkPlane[]|null
    */
    public function getPlanes()
    {
        return $this->container['planes'];
    }

    /**
    * Sets planes
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\CentralNetworkPlane[]|null $planes 中心网平面列表。
    *
    * @return $this
    */
    public function setPlanes($planes)
    {
        $this->container['planes'] = $planes;
        return $this;
    }

    /**
    * Gets erInstances
    *  中心网ER实例列表。
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\CentralNetworkErInstance[]|null
    */
    public function getErInstances()
    {
        return $this->container['erInstances'];
    }

    /**
    * Sets erInstances
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\CentralNetworkErInstance[]|null $erInstances 中心网ER实例列表。
    *
    * @return $this
    */
    public function setErInstances($erInstances)
    {
        $this->container['erInstances'] = $erInstances;
        return $this;
    }

    /**
    * Gets connections
    *  中心网ER连接列表。
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\CentralNetworkConnectionInfo[]|null
    */
    public function getConnections()
    {
        return $this->container['connections'];
    }

    /**
    * Sets connections
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\CentralNetworkConnectionInfo[]|null $connections 中心网ER连接列表。
    *
    * @return $this
    */
    public function setConnections($connections)
    {
        $this->container['connections'] = $connections;
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

