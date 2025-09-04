<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDeviceAuthenticationTemplateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDeviceAuthenticationTemplateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateId  鉴权模板id
    * templateName  鉴权模板名称
    * createTime  鉴权模板创建的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    * updateTime  鉴权模板最后一次修改的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    * description  鉴权模板的描述信息
    * status  **参数说明**：鉴权模板状态 - ACTIVE：该鉴权模板为激活状态。 - INACTIVE：该鉴权模板为停用状态。
    * templateBody  templateBody
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateId' => 'string',
            'templateName' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'description' => 'string',
            'status' => 'string',
            'templateBody' => '\HuaweiCloud\SDK\IoTDA\V5\Model\AuthenticationTemplateBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateId  鉴权模板id
    * templateName  鉴权模板名称
    * createTime  鉴权模板创建的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    * updateTime  鉴权模板最后一次修改的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    * description  鉴权模板的描述信息
    * status  **参数说明**：鉴权模板状态 - ACTIVE：该鉴权模板为激活状态。 - INACTIVE：该鉴权模板为停用状态。
    * templateBody  templateBody
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateId' => null,
        'templateName' => null,
        'createTime' => null,
        'updateTime' => null,
        'description' => null,
        'status' => null,
        'templateBody' => null
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
    * templateId  鉴权模板id
    * templateName  鉴权模板名称
    * createTime  鉴权模板创建的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    * updateTime  鉴权模板最后一次修改的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    * description  鉴权模板的描述信息
    * status  **参数说明**：鉴权模板状态 - ACTIVE：该鉴权模板为激活状态。 - INACTIVE：该鉴权模板为停用状态。
    * templateBody  templateBody
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateId' => 'template_id',
            'templateName' => 'template_name',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'description' => 'description',
            'status' => 'status',
            'templateBody' => 'template_body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateId  鉴权模板id
    * templateName  鉴权模板名称
    * createTime  鉴权模板创建的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    * updateTime  鉴权模板最后一次修改的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    * description  鉴权模板的描述信息
    * status  **参数说明**：鉴权模板状态 - ACTIVE：该鉴权模板为激活状态。 - INACTIVE：该鉴权模板为停用状态。
    * templateBody  templateBody
    *
    * @var string[]
    */
    protected static $setters = [
            'templateId' => 'setTemplateId',
            'templateName' => 'setTemplateName',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'description' => 'setDescription',
            'status' => 'setStatus',
            'templateBody' => 'setTemplateBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateId  鉴权模板id
    * templateName  鉴权模板名称
    * createTime  鉴权模板创建的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    * updateTime  鉴权模板最后一次修改的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    * description  鉴权模板的描述信息
    * status  **参数说明**：鉴权模板状态 - ACTIVE：该鉴权模板为激活状态。 - INACTIVE：该鉴权模板为停用状态。
    * templateBody  templateBody
    *
    * @var string[]
    */
    protected static $getters = [
            'templateId' => 'getTemplateId',
            'templateName' => 'getTemplateName',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'description' => 'getDescription',
            'status' => 'getStatus',
            'templateBody' => 'getTemplateBody'
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
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['templateBody'] = isset($data['templateBody']) ? $data['templateBody'] : null;
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
    * Gets templateId
    *  鉴权模板id
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
    * @param string|null $templateId 鉴权模板id
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
    *  鉴权模板名称
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
    * @param string|null $templateName 鉴权模板名称
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
        return $this;
    }

    /**
    * Gets createTime
    *  鉴权模板创建的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
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
    * @param string|null $createTime 鉴权模板创建的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
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
    *  鉴权模板最后一次修改的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
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
    * @param string|null $updateTime 鉴权模板最后一次修改的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets description
    *  鉴权模板的描述信息
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
    * @param string|null $description 鉴权模板的描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets status
    *  **参数说明**：鉴权模板状态 - ACTIVE：该鉴权模板为激活状态。 - INACTIVE：该鉴权模板为停用状态。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数说明**：鉴权模板状态 - ACTIVE：该鉴权模板为激活状态。 - INACTIVE：该鉴权模板为停用状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets templateBody
    *  templateBody
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\AuthenticationTemplateBody|null
    */
    public function getTemplateBody()
    {
        return $this->container['templateBody'];
    }

    /**
    * Sets templateBody
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\AuthenticationTemplateBody|null $templateBody templateBody
    *
    * @return $this
    */
    public function setTemplateBody($templateBody)
    {
        $this->container['templateBody'] = $templateBody;
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

