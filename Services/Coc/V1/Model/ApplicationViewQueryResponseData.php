<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApplicationViewQueryResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApplicationViewQueryResponse_data';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** CMDB分配的uuid。 **取值范围：** 不涉及。
    * name  **参数解释：** 应用或分组或组件的名称。 **取值范围：** 字符串，长度在[3,50]之间。
    * code  **参数解释：** 应用或分组或组件code。 **取值范围：** 字符串，长度在[3,50]之间。
    * type  **参数解释：** 应用或分组或组件。 **取值范围：** 不涉及。
    * parentId  **参数解释：** 父节点id，即查询结果所在路径的父节点id。 **取值范围：** 字符串，长度24。
    * componentId  **参数解释：** 组件id。 **取值范围：** 字符串，长度24。
    * applicationId  **参数解释：** 应用id。 **取值范围：** 字符串，长度24。
    * path  **参数解释：** 节点所在路径，由应用，组件，分组等id组成。 **取值范围：** 不涉及。
    * vendor  **参数解释：** 云厂商信息。 **取值范围：** - RMS：华为云厂商。 - ALI：阿里云厂商。 - OTHER：其他厂商。
    * relatedDomainId  **参数解释：** 跨账号资源所属的domainId。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'code' => 'string',
            'type' => 'string',
            'parentId' => 'string',
            'componentId' => 'string',
            'applicationId' => 'string',
            'path' => 'string',
            'vendor' => 'string',
            'relatedDomainId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** CMDB分配的uuid。 **取值范围：** 不涉及。
    * name  **参数解释：** 应用或分组或组件的名称。 **取值范围：** 字符串，长度在[3,50]之间。
    * code  **参数解释：** 应用或分组或组件code。 **取值范围：** 字符串，长度在[3,50]之间。
    * type  **参数解释：** 应用或分组或组件。 **取值范围：** 不涉及。
    * parentId  **参数解释：** 父节点id，即查询结果所在路径的父节点id。 **取值范围：** 字符串，长度24。
    * componentId  **参数解释：** 组件id。 **取值范围：** 字符串，长度24。
    * applicationId  **参数解释：** 应用id。 **取值范围：** 字符串，长度24。
    * path  **参数解释：** 节点所在路径，由应用，组件，分组等id组成。 **取值范围：** 不涉及。
    * vendor  **参数解释：** 云厂商信息。 **取值范围：** - RMS：华为云厂商。 - ALI：阿里云厂商。 - OTHER：其他厂商。
    * relatedDomainId  **参数解释：** 跨账号资源所属的domainId。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'code' => null,
        'type' => null,
        'parentId' => null,
        'componentId' => null,
        'applicationId' => null,
        'path' => null,
        'vendor' => null,
        'relatedDomainId' => null
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
    * id  **参数解释：** CMDB分配的uuid。 **取值范围：** 不涉及。
    * name  **参数解释：** 应用或分组或组件的名称。 **取值范围：** 字符串，长度在[3,50]之间。
    * code  **参数解释：** 应用或分组或组件code。 **取值范围：** 字符串，长度在[3,50]之间。
    * type  **参数解释：** 应用或分组或组件。 **取值范围：** 不涉及。
    * parentId  **参数解释：** 父节点id，即查询结果所在路径的父节点id。 **取值范围：** 字符串，长度24。
    * componentId  **参数解释：** 组件id。 **取值范围：** 字符串，长度24。
    * applicationId  **参数解释：** 应用id。 **取值范围：** 字符串，长度24。
    * path  **参数解释：** 节点所在路径，由应用，组件，分组等id组成。 **取值范围：** 不涉及。
    * vendor  **参数解释：** 云厂商信息。 **取值范围：** - RMS：华为云厂商。 - ALI：阿里云厂商。 - OTHER：其他厂商。
    * relatedDomainId  **参数解释：** 跨账号资源所属的domainId。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'code' => 'code',
            'type' => 'type',
            'parentId' => 'parent_id',
            'componentId' => 'component_id',
            'applicationId' => 'application_id',
            'path' => 'path',
            'vendor' => 'vendor',
            'relatedDomainId' => 'related_domain_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** CMDB分配的uuid。 **取值范围：** 不涉及。
    * name  **参数解释：** 应用或分组或组件的名称。 **取值范围：** 字符串，长度在[3,50]之间。
    * code  **参数解释：** 应用或分组或组件code。 **取值范围：** 字符串，长度在[3,50]之间。
    * type  **参数解释：** 应用或分组或组件。 **取值范围：** 不涉及。
    * parentId  **参数解释：** 父节点id，即查询结果所在路径的父节点id。 **取值范围：** 字符串，长度24。
    * componentId  **参数解释：** 组件id。 **取值范围：** 字符串，长度24。
    * applicationId  **参数解释：** 应用id。 **取值范围：** 字符串，长度24。
    * path  **参数解释：** 节点所在路径，由应用，组件，分组等id组成。 **取值范围：** 不涉及。
    * vendor  **参数解释：** 云厂商信息。 **取值范围：** - RMS：华为云厂商。 - ALI：阿里云厂商。 - OTHER：其他厂商。
    * relatedDomainId  **参数解释：** 跨账号资源所属的domainId。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'code' => 'setCode',
            'type' => 'setType',
            'parentId' => 'setParentId',
            'componentId' => 'setComponentId',
            'applicationId' => 'setApplicationId',
            'path' => 'setPath',
            'vendor' => 'setVendor',
            'relatedDomainId' => 'setRelatedDomainId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** CMDB分配的uuid。 **取值范围：** 不涉及。
    * name  **参数解释：** 应用或分组或组件的名称。 **取值范围：** 字符串，长度在[3,50]之间。
    * code  **参数解释：** 应用或分组或组件code。 **取值范围：** 字符串，长度在[3,50]之间。
    * type  **参数解释：** 应用或分组或组件。 **取值范围：** 不涉及。
    * parentId  **参数解释：** 父节点id，即查询结果所在路径的父节点id。 **取值范围：** 字符串，长度24。
    * componentId  **参数解释：** 组件id。 **取值范围：** 字符串，长度24。
    * applicationId  **参数解释：** 应用id。 **取值范围：** 字符串，长度24。
    * path  **参数解释：** 节点所在路径，由应用，组件，分组等id组成。 **取值范围：** 不涉及。
    * vendor  **参数解释：** 云厂商信息。 **取值范围：** - RMS：华为云厂商。 - ALI：阿里云厂商。 - OTHER：其他厂商。
    * relatedDomainId  **参数解释：** 跨账号资源所属的domainId。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'code' => 'getCode',
            'type' => 'getType',
            'parentId' => 'getParentId',
            'componentId' => 'getComponentId',
            'applicationId' => 'getApplicationId',
            'path' => 'getPath',
            'vendor' => 'getVendor',
            'relatedDomainId' => 'getRelatedDomainId'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['applicationId'] = isset($data['applicationId']) ? $data['applicationId'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['vendor'] = isset($data['vendor']) ? $data['vendor'] : null;
        $this->container['relatedDomainId'] = isset($data['relatedDomainId']) ? $data['relatedDomainId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 50)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 3)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) > 50)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) < 3)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['parentId']) && (mb_strlen($this->container['parentId']) > 24)) {
                $invalidProperties[] = "invalid value for 'parentId', the character length must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['parentId']) && (mb_strlen($this->container['parentId']) < 24)) {
                $invalidProperties[] = "invalid value for 'parentId', the character length must be bigger than or equal to 24.";
            }
            if (!is_null($this->container['componentId']) && (mb_strlen($this->container['componentId']) > 24)) {
                $invalidProperties[] = "invalid value for 'componentId', the character length must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['componentId']) && (mb_strlen($this->container['componentId']) < 24)) {
                $invalidProperties[] = "invalid value for 'componentId', the character length must be bigger than or equal to 24.";
            }
            if (!is_null($this->container['applicationId']) && (mb_strlen($this->container['applicationId']) > 24)) {
                $invalidProperties[] = "invalid value for 'applicationId', the character length must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['applicationId']) && (mb_strlen($this->container['applicationId']) < 24)) {
                $invalidProperties[] = "invalid value for 'applicationId', the character length must be bigger than or equal to 24.";
            }
            if (!is_null($this->container['vendor']) && (mb_strlen($this->container['vendor']) > 64)) {
                $invalidProperties[] = "invalid value for 'vendor', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vendor']) && (mb_strlen($this->container['vendor']) < 1)) {
                $invalidProperties[] = "invalid value for 'vendor', the character length must be bigger than or equal to 1.";
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
    *  **参数解释：** CMDB分配的uuid。 **取值范围：** 不涉及。
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
    * @param string|null $id **参数解释：** CMDB分配的uuid。 **取值范围：** 不涉及。
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
    *  **参数解释：** 应用或分组或组件的名称。 **取值范围：** 字符串，长度在[3,50]之间。
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
    * @param string|null $name **参数解释：** 应用或分组或组件的名称。 **取值范围：** 字符串，长度在[3,50]之间。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets code
    *  **参数解释：** 应用或分组或组件code。 **取值范围：** 字符串，长度在[3,50]之间。
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code **参数解释：** 应用或分组或组件code。 **取值范围：** 字符串，长度在[3,50]之间。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 应用或分组或组件。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释：** 应用或分组或组件。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets parentId
    *  **参数解释：** 父节点id，即查询结果所在路径的父节点id。 **取值范围：** 字符串，长度24。
    *
    * @return string|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string|null $parentId **参数解释：** 父节点id，即查询结果所在路径的父节点id。 **取值范围：** 字符串，长度24。
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets componentId
    *  **参数解释：** 组件id。 **取值范围：** 字符串，长度24。
    *
    * @return string|null
    */
    public function getComponentId()
    {
        return $this->container['componentId'];
    }

    /**
    * Sets componentId
    *
    * @param string|null $componentId **参数解释：** 组件id。 **取值范围：** 字符串，长度24。
    *
    * @return $this
    */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;
        return $this;
    }

    /**
    * Gets applicationId
    *  **参数解释：** 应用id。 **取值范围：** 字符串，长度24。
    *
    * @return string|null
    */
    public function getApplicationId()
    {
        return $this->container['applicationId'];
    }

    /**
    * Sets applicationId
    *
    * @param string|null $applicationId **参数解释：** 应用id。 **取值范围：** 字符串，长度24。
    *
    * @return $this
    */
    public function setApplicationId($applicationId)
    {
        $this->container['applicationId'] = $applicationId;
        return $this;
    }

    /**
    * Gets path
    *  **参数解释：** 节点所在路径，由应用，组件，分组等id组成。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path **参数解释：** 节点所在路径，由应用，组件，分组等id组成。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets vendor
    *  **参数解释：** 云厂商信息。 **取值范围：** - RMS：华为云厂商。 - ALI：阿里云厂商。 - OTHER：其他厂商。
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
    * @param string|null $vendor **参数解释：** 云厂商信息。 **取值范围：** - RMS：华为云厂商。 - ALI：阿里云厂商。 - OTHER：其他厂商。
    *
    * @return $this
    */
    public function setVendor($vendor)
    {
        $this->container['vendor'] = $vendor;
        return $this;
    }

    /**
    * Gets relatedDomainId
    *  **参数解释：** 跨账号资源所属的domainId。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getRelatedDomainId()
    {
        return $this->container['relatedDomainId'];
    }

    /**
    * Sets relatedDomainId
    *
    * @param string|null $relatedDomainId **参数解释：** 跨账号资源所属的domainId。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setRelatedDomainId($relatedDomainId)
    {
        $this->container['relatedDomainId'] = $relatedDomainId;
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

