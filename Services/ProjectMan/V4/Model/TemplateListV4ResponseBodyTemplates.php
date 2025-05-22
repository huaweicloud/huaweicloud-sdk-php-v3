<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TemplateListV4ResponseBodyTemplates implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TemplateListV4ResponseBody_templates';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  模板id
    * projectId  项目id
    * trackerId  工作项类型id
    * description  工作项详情模板描述内容
    * issueFieldConfig  模板配置
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'projectId' => 'int',
            'trackerId' => 'int',
            'description' => 'string',
            'issueFieldConfig' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  模板id
    * projectId  项目id
    * trackerId  工作项类型id
    * description  工作项详情模板描述内容
    * issueFieldConfig  模板配置
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'projectId' => 'int32',
        'trackerId' => 'int32',
        'description' => null,
        'issueFieldConfig' => null
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
    * id  模板id
    * projectId  项目id
    * trackerId  工作项类型id
    * description  工作项详情模板描述内容
    * issueFieldConfig  模板配置
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'projectId' => 'project_id',
            'trackerId' => 'tracker_id',
            'description' => 'description',
            'issueFieldConfig' => 'issue_field_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  模板id
    * projectId  项目id
    * trackerId  工作项类型id
    * description  工作项详情模板描述内容
    * issueFieldConfig  模板配置
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'trackerId' => 'setTrackerId',
            'description' => 'setDescription',
            'issueFieldConfig' => 'setIssueFieldConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  模板id
    * projectId  项目id
    * trackerId  工作项类型id
    * description  工作项详情模板描述内容
    * issueFieldConfig  模板配置
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'trackerId' => 'getTrackerId',
            'description' => 'getDescription',
            'issueFieldConfig' => 'getIssueFieldConfig'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['trackerId'] = isset($data['trackerId']) ? $data['trackerId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['issueFieldConfig'] = isset($data['issueFieldConfig']) ? $data['issueFieldConfig'] : null;
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
    *  模板id
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 模板id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id
    *
    * @return int|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param int|null $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets trackerId
    *  工作项类型id
    *
    * @return int|null
    */
    public function getTrackerId()
    {
        return $this->container['trackerId'];
    }

    /**
    * Sets trackerId
    *
    * @param int|null $trackerId 工作项类型id
    *
    * @return $this
    */
    public function setTrackerId($trackerId)
    {
        $this->container['trackerId'] = $trackerId;
        return $this;
    }

    /**
    * Gets description
    *  工作项详情模板描述内容
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
    * @param string|null $description 工作项详情模板描述内容
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets issueFieldConfig
    *  模板配置
    *
    * @return string|null
    */
    public function getIssueFieldConfig()
    {
        return $this->container['issueFieldConfig'];
    }

    /**
    * Sets issueFieldConfig
    *
    * @param string|null $issueFieldConfig 模板配置
    *
    * @return $this
    */
    public function setIssueFieldConfig($issueFieldConfig)
    {
        $this->container['issueFieldConfig'] = $issueFieldConfig;
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

