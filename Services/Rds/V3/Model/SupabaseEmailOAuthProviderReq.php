<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SupabaseEmailOAuthProviderReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SupabaseEmailOAuthProviderReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enableEmailSignUp  enableEmailSignUp
    * enableEmailAutoConfirm  enableEmailAutoConfirm
    * smtpConfig  smtpConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enableEmailSignUp' => 'bool',
            'enableEmailAutoConfirm' => 'bool',
            'smtpConfig' => '\HuaweiCloud\SDK\Rds\V3\Model\SupabaseSMTPServerReq'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enableEmailSignUp  enableEmailSignUp
    * enableEmailAutoConfirm  enableEmailAutoConfirm
    * smtpConfig  smtpConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enableEmailSignUp' => null,
        'enableEmailAutoConfirm' => null,
        'smtpConfig' => null
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
    * enableEmailSignUp  enableEmailSignUp
    * enableEmailAutoConfirm  enableEmailAutoConfirm
    * smtpConfig  smtpConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enableEmailSignUp' => 'enable_email_sign_up',
            'enableEmailAutoConfirm' => 'enable_email_auto_confirm',
            'smtpConfig' => 'smtp_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enableEmailSignUp  enableEmailSignUp
    * enableEmailAutoConfirm  enableEmailAutoConfirm
    * smtpConfig  smtpConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'enableEmailSignUp' => 'setEnableEmailSignUp',
            'enableEmailAutoConfirm' => 'setEnableEmailAutoConfirm',
            'smtpConfig' => 'setSmtpConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enableEmailSignUp  enableEmailSignUp
    * enableEmailAutoConfirm  enableEmailAutoConfirm
    * smtpConfig  smtpConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'enableEmailSignUp' => 'getEnableEmailSignUp',
            'enableEmailAutoConfirm' => 'getEnableEmailAutoConfirm',
            'smtpConfig' => 'getSmtpConfig'
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
        $this->container['enableEmailSignUp'] = isset($data['enableEmailSignUp']) ? $data['enableEmailSignUp'] : null;
        $this->container['enableEmailAutoConfirm'] = isset($data['enableEmailAutoConfirm']) ? $data['enableEmailAutoConfirm'] : null;
        $this->container['smtpConfig'] = isset($data['smtpConfig']) ? $data['smtpConfig'] : null;
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
    * Gets enableEmailSignUp
    *  enableEmailSignUp
    *
    * @return bool|null
    */
    public function getEnableEmailSignUp()
    {
        return $this->container['enableEmailSignUp'];
    }

    /**
    * Sets enableEmailSignUp
    *
    * @param bool|null $enableEmailSignUp enableEmailSignUp
    *
    * @return $this
    */
    public function setEnableEmailSignUp($enableEmailSignUp)
    {
        $this->container['enableEmailSignUp'] = $enableEmailSignUp;
        return $this;
    }

    /**
    * Gets enableEmailAutoConfirm
    *  enableEmailAutoConfirm
    *
    * @return bool|null
    */
    public function getEnableEmailAutoConfirm()
    {
        return $this->container['enableEmailAutoConfirm'];
    }

    /**
    * Sets enableEmailAutoConfirm
    *
    * @param bool|null $enableEmailAutoConfirm enableEmailAutoConfirm
    *
    * @return $this
    */
    public function setEnableEmailAutoConfirm($enableEmailAutoConfirm)
    {
        $this->container['enableEmailAutoConfirm'] = $enableEmailAutoConfirm;
        return $this;
    }

    /**
    * Gets smtpConfig
    *  smtpConfig
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\SupabaseSMTPServerReq|null
    */
    public function getSmtpConfig()
    {
        return $this->container['smtpConfig'];
    }

    /**
    * Sets smtpConfig
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\SupabaseSMTPServerReq|null $smtpConfig smtpConfig
    *
    * @return $this
    */
    public function setSmtpConfig($smtpConfig)
    {
        $this->container['smtpConfig'] = $smtpConfig;
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

