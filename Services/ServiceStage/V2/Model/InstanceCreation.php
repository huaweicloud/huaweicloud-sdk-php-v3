<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceCreation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceCreation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  实例名称，必填
    * desc  实例描述，非必填
    * diagram  架构部署图，通过设计器创建时必填
    * image  设计器架构图base64编码,通过设计器创建或更新实例时可选
    * templateId  预置模板id，通过模板创建时必填
    * variables  variables
    * instanceId  实例id,更新时必填
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'desc' => 'string',
            'diagram' => 'string',
            'image' => 'string',
            'templateId' => 'string',
            'variables' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\InstanceCreationVariables',
            'instanceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  实例名称，必填
    * desc  实例描述，非必填
    * diagram  架构部署图，通过设计器创建时必填
    * image  设计器架构图base64编码,通过设计器创建或更新实例时可选
    * templateId  预置模板id，通过模板创建时必填
    * variables  variables
    * instanceId  实例id,更新时必填
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'desc' => null,
        'diagram' => null,
        'image' => null,
        'templateId' => null,
        'variables' => null,
        'instanceId' => null
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
    * name  实例名称，必填
    * desc  实例描述，非必填
    * diagram  架构部署图，通过设计器创建时必填
    * image  设计器架构图base64编码,通过设计器创建或更新实例时可选
    * templateId  预置模板id，通过模板创建时必填
    * variables  variables
    * instanceId  实例id,更新时必填
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'desc' => 'desc',
            'diagram' => 'diagram',
            'image' => 'image',
            'templateId' => 'template_id',
            'variables' => 'variables',
            'instanceId' => 'instance_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  实例名称，必填
    * desc  实例描述，非必填
    * diagram  架构部署图，通过设计器创建时必填
    * image  设计器架构图base64编码,通过设计器创建或更新实例时可选
    * templateId  预置模板id，通过模板创建时必填
    * variables  variables
    * instanceId  实例id,更新时必填
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'desc' => 'setDesc',
            'diagram' => 'setDiagram',
            'image' => 'setImage',
            'templateId' => 'setTemplateId',
            'variables' => 'setVariables',
            'instanceId' => 'setInstanceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  实例名称，必填
    * desc  实例描述，非必填
    * diagram  架构部署图，通过设计器创建时必填
    * image  设计器架构图base64编码,通过设计器创建或更新实例时可选
    * templateId  预置模板id，通过模板创建时必填
    * variables  variables
    * instanceId  实例id,更新时必填
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'desc' => 'getDesc',
            'diagram' => 'getDiagram',
            'image' => 'getImage',
            'templateId' => 'getTemplateId',
            'variables' => 'getVariables',
            'instanceId' => 'getInstanceId'
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
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['diagram'] = isset($data['diagram']) ? $data['diagram'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['variables'] = isset($data['variables']) ? $data['variables'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
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
    *  实例名称，必填
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
    * @param string|null $name 实例名称，必填
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets desc
    *  实例描述，非必填
    *
    * @return string|null
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param string|null $desc 实例描述，非必填
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
        return $this;
    }

    /**
    * Gets diagram
    *  架构部署图，通过设计器创建时必填
    *
    * @return string|null
    */
    public function getDiagram()
    {
        return $this->container['diagram'];
    }

    /**
    * Sets diagram
    *
    * @param string|null $diagram 架构部署图，通过设计器创建时必填
    *
    * @return $this
    */
    public function setDiagram($diagram)
    {
        $this->container['diagram'] = $diagram;
        return $this;
    }

    /**
    * Gets image
    *  设计器架构图base64编码,通过设计器创建或更新实例时可选
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
    * @param string|null $image 设计器架构图base64编码,通过设计器创建或更新实例时可选
    *
    * @return $this
    */
    public function setImage($image)
    {
        $this->container['image'] = $image;
        return $this;
    }

    /**
    * Gets templateId
    *  预置模板id，通过模板创建时必填
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
    * @param string|null $templateId 预置模板id，通过模板创建时必填
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets variables
    *  variables
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\InstanceCreationVariables|null
    */
    public function getVariables()
    {
        return $this->container['variables'];
    }

    /**
    * Sets variables
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\InstanceCreationVariables|null $variables variables
    *
    * @return $this
    */
    public function setVariables($variables)
    {
        $this->container['variables'] = $variables;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例id,更新时必填
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例id,更新时必填
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
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

