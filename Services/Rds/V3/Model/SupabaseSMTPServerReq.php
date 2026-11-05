<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SupabaseSMTPServerReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SupabaseSMTPServerReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * smtpHost  smtpHost
    * smtpPort  smtpPort
    * smtpUser  smtpUser
    * smtpPwd  秘密，受控输入，show不返回。
    * smtpAdminEmail  smtpAdminEmail
    * smtpSenderName  smtpSenderName
    * smtpMaxFrequency  smtpMaxFrequency
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'smtpHost' => 'string',
            'smtpPort' => 'int',
            'smtpUser' => 'string',
            'smtpPwd' => 'string',
            'smtpAdminEmail' => 'string',
            'smtpSenderName' => 'string',
            'smtpMaxFrequency' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * smtpHost  smtpHost
    * smtpPort  smtpPort
    * smtpUser  smtpUser
    * smtpPwd  秘密，受控输入，show不返回。
    * smtpAdminEmail  smtpAdminEmail
    * smtpSenderName  smtpSenderName
    * smtpMaxFrequency  smtpMaxFrequency
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'smtpHost' => null,
        'smtpPort' => null,
        'smtpUser' => null,
        'smtpPwd' => null,
        'smtpAdminEmail' => null,
        'smtpSenderName' => null,
        'smtpMaxFrequency' => null
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
    * smtpHost  smtpHost
    * smtpPort  smtpPort
    * smtpUser  smtpUser
    * smtpPwd  秘密，受控输入，show不返回。
    * smtpAdminEmail  smtpAdminEmail
    * smtpSenderName  smtpSenderName
    * smtpMaxFrequency  smtpMaxFrequency
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'smtpHost' => 'smtp_host',
            'smtpPort' => 'smtp_port',
            'smtpUser' => 'smtp_user',
            'smtpPwd' => 'smtp_pwd',
            'smtpAdminEmail' => 'smtp_admin_email',
            'smtpSenderName' => 'smtp_sender_name',
            'smtpMaxFrequency' => 'smtp_max_frequency'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * smtpHost  smtpHost
    * smtpPort  smtpPort
    * smtpUser  smtpUser
    * smtpPwd  秘密，受控输入，show不返回。
    * smtpAdminEmail  smtpAdminEmail
    * smtpSenderName  smtpSenderName
    * smtpMaxFrequency  smtpMaxFrequency
    *
    * @var string[]
    */
    protected static $setters = [
            'smtpHost' => 'setSmtpHost',
            'smtpPort' => 'setSmtpPort',
            'smtpUser' => 'setSmtpUser',
            'smtpPwd' => 'setSmtpPwd',
            'smtpAdminEmail' => 'setSmtpAdminEmail',
            'smtpSenderName' => 'setSmtpSenderName',
            'smtpMaxFrequency' => 'setSmtpMaxFrequency'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * smtpHost  smtpHost
    * smtpPort  smtpPort
    * smtpUser  smtpUser
    * smtpPwd  秘密，受控输入，show不返回。
    * smtpAdminEmail  smtpAdminEmail
    * smtpSenderName  smtpSenderName
    * smtpMaxFrequency  smtpMaxFrequency
    *
    * @var string[]
    */
    protected static $getters = [
            'smtpHost' => 'getSmtpHost',
            'smtpPort' => 'getSmtpPort',
            'smtpUser' => 'getSmtpUser',
            'smtpPwd' => 'getSmtpPwd',
            'smtpAdminEmail' => 'getSmtpAdminEmail',
            'smtpSenderName' => 'getSmtpSenderName',
            'smtpMaxFrequency' => 'getSmtpMaxFrequency'
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
        $this->container['smtpHost'] = isset($data['smtpHost']) ? $data['smtpHost'] : null;
        $this->container['smtpPort'] = isset($data['smtpPort']) ? $data['smtpPort'] : null;
        $this->container['smtpUser'] = isset($data['smtpUser']) ? $data['smtpUser'] : null;
        $this->container['smtpPwd'] = isset($data['smtpPwd']) ? $data['smtpPwd'] : null;
        $this->container['smtpAdminEmail'] = isset($data['smtpAdminEmail']) ? $data['smtpAdminEmail'] : null;
        $this->container['smtpSenderName'] = isset($data['smtpSenderName']) ? $data['smtpSenderName'] : null;
        $this->container['smtpMaxFrequency'] = isset($data['smtpMaxFrequency']) ? $data['smtpMaxFrequency'] : null;
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
    * Gets smtpHost
    *  smtpHost
    *
    * @return string|null
    */
    public function getSmtpHost()
    {
        return $this->container['smtpHost'];
    }

    /**
    * Sets smtpHost
    *
    * @param string|null $smtpHost smtpHost
    *
    * @return $this
    */
    public function setSmtpHost($smtpHost)
    {
        $this->container['smtpHost'] = $smtpHost;
        return $this;
    }

    /**
    * Gets smtpPort
    *  smtpPort
    *
    * @return int|null
    */
    public function getSmtpPort()
    {
        return $this->container['smtpPort'];
    }

    /**
    * Sets smtpPort
    *
    * @param int|null $smtpPort smtpPort
    *
    * @return $this
    */
    public function setSmtpPort($smtpPort)
    {
        $this->container['smtpPort'] = $smtpPort;
        return $this;
    }

    /**
    * Gets smtpUser
    *  smtpUser
    *
    * @return string|null
    */
    public function getSmtpUser()
    {
        return $this->container['smtpUser'];
    }

    /**
    * Sets smtpUser
    *
    * @param string|null $smtpUser smtpUser
    *
    * @return $this
    */
    public function setSmtpUser($smtpUser)
    {
        $this->container['smtpUser'] = $smtpUser;
        return $this;
    }

    /**
    * Gets smtpPwd
    *  秘密，受控输入，show不返回。
    *
    * @return string|null
    */
    public function getSmtpPwd()
    {
        return $this->container['smtpPwd'];
    }

    /**
    * Sets smtpPwd
    *
    * @param string|null $smtpPwd 秘密，受控输入，show不返回。
    *
    * @return $this
    */
    public function setSmtpPwd($smtpPwd)
    {
        $this->container['smtpPwd'] = $smtpPwd;
        return $this;
    }

    /**
    * Gets smtpAdminEmail
    *  smtpAdminEmail
    *
    * @return string|null
    */
    public function getSmtpAdminEmail()
    {
        return $this->container['smtpAdminEmail'];
    }

    /**
    * Sets smtpAdminEmail
    *
    * @param string|null $smtpAdminEmail smtpAdminEmail
    *
    * @return $this
    */
    public function setSmtpAdminEmail($smtpAdminEmail)
    {
        $this->container['smtpAdminEmail'] = $smtpAdminEmail;
        return $this;
    }

    /**
    * Gets smtpSenderName
    *  smtpSenderName
    *
    * @return string|null
    */
    public function getSmtpSenderName()
    {
        return $this->container['smtpSenderName'];
    }

    /**
    * Sets smtpSenderName
    *
    * @param string|null $smtpSenderName smtpSenderName
    *
    * @return $this
    */
    public function setSmtpSenderName($smtpSenderName)
    {
        $this->container['smtpSenderName'] = $smtpSenderName;
        return $this;
    }

    /**
    * Gets smtpMaxFrequency
    *  smtpMaxFrequency
    *
    * @return int|null
    */
    public function getSmtpMaxFrequency()
    {
        return $this->container['smtpMaxFrequency'];
    }

    /**
    * Sets smtpMaxFrequency
    *
    * @param int|null $smtpMaxFrequency smtpMaxFrequency
    *
    * @return $this
    */
    public function setSmtpMaxFrequency($smtpMaxFrequency)
    {
        $this->container['smtpMaxFrequency'] = $smtpMaxFrequency;
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

