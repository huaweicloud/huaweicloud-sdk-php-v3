<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskV2RequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskV2RequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deploySystem  部署系统，deployTemplate：部署模板
    * templateId  模板id
    * ansibleType  是否切换新系统支持，1：是 0：否
    * operationList  部署编排列表信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deploySystem' => 'string',
            'templateId' => 'string',
            'ansibleType' => 'int',
            'operationList' => '\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeployV2OperationsDO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deploySystem  部署系统，deployTemplate：部署模板
    * templateId  模板id
    * ansibleType  是否切换新系统支持，1：是 0：否
    * operationList  部署编排列表信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deploySystem' => null,
        'templateId' => null,
        'ansibleType' => null,
        'operationList' => null
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
    * deploySystem  部署系统，deployTemplate：部署模板
    * templateId  模板id
    * ansibleType  是否切换新系统支持，1：是 0：否
    * operationList  部署编排列表信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deploySystem' => 'deploy_system',
            'templateId' => 'template_id',
            'ansibleType' => 'ansible_type',
            'operationList' => 'operation_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deploySystem  部署系统，deployTemplate：部署模板
    * templateId  模板id
    * ansibleType  是否切换新系统支持，1：是 0：否
    * operationList  部署编排列表信息
    *
    * @var string[]
    */
    protected static $setters = [
            'deploySystem' => 'setDeploySystem',
            'templateId' => 'setTemplateId',
            'ansibleType' => 'setAnsibleType',
            'operationList' => 'setOperationList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deploySystem  部署系统，deployTemplate：部署模板
    * templateId  模板id
    * ansibleType  是否切换新系统支持，1：是 0：否
    * operationList  部署编排列表信息
    *
    * @var string[]
    */
    protected static $getters = [
            'deploySystem' => 'getDeploySystem',
            'templateId' => 'getTemplateId',
            'ansibleType' => 'getAnsibleType',
            'operationList' => 'getOperationList'
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
        $this->container['deploySystem'] = isset($data['deploySystem']) ? $data['deploySystem'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['ansibleType'] = isset($data['ansibleType']) ? $data['ansibleType'] : null;
        $this->container['operationList'] = isset($data['operationList']) ? $data['operationList'] : null;
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
    * Gets deploySystem
    *  部署系统，deployTemplate：部署模板
    *
    * @return string|null
    */
    public function getDeploySystem()
    {
        return $this->container['deploySystem'];
    }

    /**
    * Sets deploySystem
    *
    * @param string|null $deploySystem 部署系统，deployTemplate：部署模板
    *
    * @return $this
    */
    public function setDeploySystem($deploySystem)
    {
        $this->container['deploySystem'] = $deploySystem;
        return $this;
    }

    /**
    * Gets templateId
    *  模板id
    *
    * @return string|null
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string|null $templateId 模板id
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets ansibleType
    *  是否切换新系统支持，1：是 0：否
    *
    * @return int|null
    */
    public function getAnsibleType()
    {
        return $this->container['ansibleType'];
    }

    /**
    * Sets ansibleType
    *
    * @param int|null $ansibleType 是否切换新系统支持，1：是 0：否
    *
    * @return $this
    */
    public function setAnsibleType($ansibleType)
    {
        $this->container['ansibleType'] = $ansibleType;
        return $this;
    }

    /**
    * Gets operationList
    *  部署编排列表信息
    *
    * @return \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeployV2OperationsDO[]|null
    */
    public function getOperationList()
    {
        return $this->container['operationList'];
    }

    /**
    * Sets operationList
    *
    * @param \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeployV2OperationsDO[]|null $operationList 部署编排列表信息
    *
    * @return $this
    */
    public function setOperationList($operationList)
    {
        $this->container['operationList'] = $operationList;
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

