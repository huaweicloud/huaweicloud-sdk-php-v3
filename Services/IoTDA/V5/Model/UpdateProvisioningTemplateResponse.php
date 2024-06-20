<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateProvisioningTemplateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateProvisioningTemplateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateId  **参数说明**：预调配模板ID。
    * templateName  **参数说明**：预调配模板名称。 **取值范围**：长度不超过128，只允许中文、字母、数字、下划线（_）、连接符（-）的组合。
    * description  **参数说明**：预调配模板的描述信息。 **取值范围**：长度不超过2048，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    * templateBody  templateBody
    * createTime  在物联网平台创建预调配模板的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * updateTime  在物联网平台更新预调配模板的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateId' => 'string',
            'templateName' => 'string',
            'description' => 'string',
            'templateBody' => '\HuaweiCloud\SDK\IoTDA\V5\Model\ProvisioningTemplateBody',
            'createTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateId  **参数说明**：预调配模板ID。
    * templateName  **参数说明**：预调配模板名称。 **取值范围**：长度不超过128，只允许中文、字母、数字、下划线（_）、连接符（-）的组合。
    * description  **参数说明**：预调配模板的描述信息。 **取值范围**：长度不超过2048，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    * templateBody  templateBody
    * createTime  在物联网平台创建预调配模板的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * updateTime  在物联网平台更新预调配模板的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateId' => null,
        'templateName' => null,
        'description' => null,
        'templateBody' => null,
        'createTime' => null,
        'updateTime' => null
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
    * templateId  **参数说明**：预调配模板ID。
    * templateName  **参数说明**：预调配模板名称。 **取值范围**：长度不超过128，只允许中文、字母、数字、下划线（_）、连接符（-）的组合。
    * description  **参数说明**：预调配模板的描述信息。 **取值范围**：长度不超过2048，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    * templateBody  templateBody
    * createTime  在物联网平台创建预调配模板的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * updateTime  在物联网平台更新预调配模板的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateId' => 'template_id',
            'templateName' => 'template_name',
            'description' => 'description',
            'templateBody' => 'template_body',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateId  **参数说明**：预调配模板ID。
    * templateName  **参数说明**：预调配模板名称。 **取值范围**：长度不超过128，只允许中文、字母、数字、下划线（_）、连接符（-）的组合。
    * description  **参数说明**：预调配模板的描述信息。 **取值范围**：长度不超过2048，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    * templateBody  templateBody
    * createTime  在物联网平台创建预调配模板的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * updateTime  在物联网平台更新预调配模板的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @var string[]
    */
    protected static $setters = [
            'templateId' => 'setTemplateId',
            'templateName' => 'setTemplateName',
            'description' => 'setDescription',
            'templateBody' => 'setTemplateBody',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateId  **参数说明**：预调配模板ID。
    * templateName  **参数说明**：预调配模板名称。 **取值范围**：长度不超过128，只允许中文、字母、数字、下划线（_）、连接符（-）的组合。
    * description  **参数说明**：预调配模板的描述信息。 **取值范围**：长度不超过2048，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    * templateBody  templateBody
    * createTime  在物联网平台创建预调配模板的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * updateTime  在物联网平台更新预调配模板的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @var string[]
    */
    protected static $getters = [
            'templateId' => 'getTemplateId',
            'templateName' => 'getTemplateName',
            'description' => 'getDescription',
            'templateBody' => 'getTemplateBody',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['templateBody'] = isset($data['templateBody']) ? $data['templateBody'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['templateId']) && !preg_match("/^[a-fA-F0-9]{24}$/", $this->container['templateId'])) {
                $invalidProperties[] = "invalid value for 'templateId', must be conform to the pattern /^[a-fA-F0-9]{24}$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 2048)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 2048.";
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
    * Gets templateId
    *  **参数说明**：预调配模板ID。
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
    * @param string|null $templateId **参数说明**：预调配模板ID。
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets templateName
    *  **参数说明**：预调配模板名称。 **取值范围**：长度不超过128，只允许中文、字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @return string|null
    */
    public function getTemplateName()
    {
        return $this->container['templateName'];
    }

    /**
    * Sets templateName
    *
    * @param string|null $templateName **参数说明**：预调配模板名称。 **取值范围**：长度不超过128，只允许中文、字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
        return $this;
    }

    /**
    * Gets description
    *  **参数说明**：预调配模板的描述信息。 **取值范围**：长度不超过2048，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
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
    * @param string|null $description **参数说明**：预调配模板的描述信息。 **取值范围**：长度不超过2048，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets templateBody
    *  templateBody
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\ProvisioningTemplateBody|null
    */
    public function getTemplateBody()
    {
        return $this->container['templateBody'];
    }

    /**
    * Sets templateBody
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\ProvisioningTemplateBody|null $templateBody templateBody
    *
    * @return $this
    */
    public function setTemplateBody($templateBody)
    {
        $this->container['templateBody'] = $templateBody;
        return $this;
    }

    /**
    * Gets createTime
    *  在物联网平台创建预调配模板的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 在物联网平台创建预调配模板的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  在物联网平台更新预调配模板的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 在物联网平台更新预调配模板的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

