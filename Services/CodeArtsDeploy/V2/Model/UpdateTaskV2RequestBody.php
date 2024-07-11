<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateTaskV2RequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateTaskV2RequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  部署任务id
    * deploySystem  部署系统，deployTemplate：部署模板
    * templateId  部署模板实例id
    * operationList  部署编排列表信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'deploySystem' => 'string',
            'templateId' => 'string',
            'operationList' => '\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeployV2OperationsDO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  部署任务id
    * deploySystem  部署系统，deployTemplate：部署模板
    * templateId  部署模板实例id
    * operationList  部署编排列表信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'deploySystem' => null,
        'templateId' => null,
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
    * id  部署任务id
    * deploySystem  部署系统，deployTemplate：部署模板
    * templateId  部署模板实例id
    * operationList  部署编排列表信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'deploySystem' => 'deploy_system',
            'templateId' => 'template_id',
            'operationList' => 'operation_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  部署任务id
    * deploySystem  部署系统，deployTemplate：部署模板
    * templateId  部署模板实例id
    * operationList  部署编排列表信息
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'deploySystem' => 'setDeploySystem',
            'templateId' => 'setTemplateId',
            'operationList' => 'setOperationList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  部署任务id
    * deploySystem  部署系统，deployTemplate：部署模板
    * templateId  部署模板实例id
    * operationList  部署编排列表信息
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'deploySystem' => 'getDeploySystem',
            'templateId' => 'getTemplateId',
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
    const DEPLOY_SYSTEM_DEPLOY_TEMPLATE = 'deployTemplate';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDeploySystemAllowableValues()
    {
        return [
            self::DEPLOY_SYSTEM_DEPLOY_TEMPLATE,
        ];
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
        $this->container['deploySystem'] = isset($data['deploySystem']) ? $data['deploySystem'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
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
            $allowedValues = $this->getDeploySystemAllowableValues();
                if (!is_null($this->container['deploySystem']) && !in_array($this->container['deploySystem'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'deploySystem', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  部署任务id
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
    * @param string|null $id 部署任务id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
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
    *  部署模板实例id
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
    * @param string|null $templateId 部署模板实例id
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
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

