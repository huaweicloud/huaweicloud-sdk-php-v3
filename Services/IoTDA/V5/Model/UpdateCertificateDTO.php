<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateCertificateDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateCertificateDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * provisionEnable  是否开启自注册能力，当为true时该功能必须配合预调配功能使用，true：是，false：否。
    * templateId  预调配模板ID，该CA证书绑定的预调配模板id，当该字段传null时表示解除绑定关系。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'provisionEnable' => 'bool',
            'templateId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * provisionEnable  是否开启自注册能力，当为true时该功能必须配合预调配功能使用，true：是，false：否。
    * templateId  预调配模板ID，该CA证书绑定的预调配模板id，当该字段传null时表示解除绑定关系。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'provisionEnable' => null,
        'templateId' => null
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
    * provisionEnable  是否开启自注册能力，当为true时该功能必须配合预调配功能使用，true：是，false：否。
    * templateId  预调配模板ID，该CA证书绑定的预调配模板id，当该字段传null时表示解除绑定关系。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'provisionEnable' => 'provision_enable',
            'templateId' => 'template_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * provisionEnable  是否开启自注册能力，当为true时该功能必须配合预调配功能使用，true：是，false：否。
    * templateId  预调配模板ID，该CA证书绑定的预调配模板id，当该字段传null时表示解除绑定关系。
    *
    * @var string[]
    */
    protected static $setters = [
            'provisionEnable' => 'setProvisionEnable',
            'templateId' => 'setTemplateId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * provisionEnable  是否开启自注册能力，当为true时该功能必须配合预调配功能使用，true：是，false：否。
    * templateId  预调配模板ID，该CA证书绑定的预调配模板id，当该字段传null时表示解除绑定关系。
    *
    * @var string[]
    */
    protected static $getters = [
            'provisionEnable' => 'getProvisionEnable',
            'templateId' => 'getTemplateId'
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
        $this->container['provisionEnable'] = isset($data['provisionEnable']) ? $data['provisionEnable'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
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
    * Gets provisionEnable
    *  是否开启自注册能力，当为true时该功能必须配合预调配功能使用，true：是，false：否。
    *
    * @return bool|null
    */
    public function getProvisionEnable()
    {
        return $this->container['provisionEnable'];
    }

    /**
    * Sets provisionEnable
    *
    * @param bool|null $provisionEnable 是否开启自注册能力，当为true时该功能必须配合预调配功能使用，true：是，false：否。
    *
    * @return $this
    */
    public function setProvisionEnable($provisionEnable)
    {
        $this->container['provisionEnable'] = $provisionEnable;
        return $this;
    }

    /**
    * Gets templateId
    *  预调配模板ID，该CA证书绑定的预调配模板id，当该字段传null时表示解除绑定关系。
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
    * @param string|null $templateId 预调配模板ID，该CA证书绑定的预调配模板id，当该字段传null时表示解除绑定关系。
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
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

