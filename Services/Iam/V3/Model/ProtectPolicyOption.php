<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProtectPolicyOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProtectPolicyOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operationProtection  是否开启操作保护，开启为\"true\"，未开启为\"false\"。
    * allowUser  allowUser
    * mobile  操作保护验证指定手机号码。示例：0086-123456789。
    * adminCheck  是否指定人员验证。on为指定人员验证，必须填写scene参数。off为操作员验证。
    * email  操作保护验证指定邮件地址。示例：example@email.com。
    * scene  操作保护指定人员验证方式，admin_check为on时，必须填写。包括mobile、email。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operationProtection' => 'bool',
            'allowUser' => '\HuaweiCloud\SDK\Iam\V3\Model\AllowUserBody',
            'mobile' => 'string',
            'adminCheck' => 'string',
            'email' => 'string',
            'scene' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operationProtection  是否开启操作保护，开启为\"true\"，未开启为\"false\"。
    * allowUser  allowUser
    * mobile  操作保护验证指定手机号码。示例：0086-123456789。
    * adminCheck  是否指定人员验证。on为指定人员验证，必须填写scene参数。off为操作员验证。
    * email  操作保护验证指定邮件地址。示例：example@email.com。
    * scene  操作保护指定人员验证方式，admin_check为on时，必须填写。包括mobile、email。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operationProtection' => null,
        'allowUser' => null,
        'mobile' => null,
        'adminCheck' => null,
        'email' => null,
        'scene' => null
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
    * operationProtection  是否开启操作保护，开启为\"true\"，未开启为\"false\"。
    * allowUser  allowUser
    * mobile  操作保护验证指定手机号码。示例：0086-123456789。
    * adminCheck  是否指定人员验证。on为指定人员验证，必须填写scene参数。off为操作员验证。
    * email  操作保护验证指定邮件地址。示例：example@email.com。
    * scene  操作保护指定人员验证方式，admin_check为on时，必须填写。包括mobile、email。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operationProtection' => 'operation_protection',
            'allowUser' => 'allow_user',
            'mobile' => 'mobile',
            'adminCheck' => 'admin_check',
            'email' => 'email',
            'scene' => 'scene'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operationProtection  是否开启操作保护，开启为\"true\"，未开启为\"false\"。
    * allowUser  allowUser
    * mobile  操作保护验证指定手机号码。示例：0086-123456789。
    * adminCheck  是否指定人员验证。on为指定人员验证，必须填写scene参数。off为操作员验证。
    * email  操作保护验证指定邮件地址。示例：example@email.com。
    * scene  操作保护指定人员验证方式，admin_check为on时，必须填写。包括mobile、email。
    *
    * @var string[]
    */
    protected static $setters = [
            'operationProtection' => 'setOperationProtection',
            'allowUser' => 'setAllowUser',
            'mobile' => 'setMobile',
            'adminCheck' => 'setAdminCheck',
            'email' => 'setEmail',
            'scene' => 'setScene'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operationProtection  是否开启操作保护，开启为\"true\"，未开启为\"false\"。
    * allowUser  allowUser
    * mobile  操作保护验证指定手机号码。示例：0086-123456789。
    * adminCheck  是否指定人员验证。on为指定人员验证，必须填写scene参数。off为操作员验证。
    * email  操作保护验证指定邮件地址。示例：example@email.com。
    * scene  操作保护指定人员验证方式，admin_check为on时，必须填写。包括mobile、email。
    *
    * @var string[]
    */
    protected static $getters = [
            'operationProtection' => 'getOperationProtection',
            'allowUser' => 'getAllowUser',
            'mobile' => 'getMobile',
            'adminCheck' => 'getAdminCheck',
            'email' => 'getEmail',
            'scene' => 'getScene'
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
        $this->container['operationProtection'] = isset($data['operationProtection']) ? $data['operationProtection'] : null;
        $this->container['allowUser'] = isset($data['allowUser']) ? $data['allowUser'] : null;
        $this->container['mobile'] = isset($data['mobile']) ? $data['mobile'] : null;
        $this->container['adminCheck'] = isset($data['adminCheck']) ? $data['adminCheck'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['scene'] = isset($data['scene']) ? $data['scene'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['operationProtection'] === null) {
            $invalidProperties[] = "'operationProtection' can't be null";
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
    * Gets operationProtection
    *  是否开启操作保护，开启为\"true\"，未开启为\"false\"。
    *
    * @return bool
    */
    public function getOperationProtection()
    {
        return $this->container['operationProtection'];
    }

    /**
    * Sets operationProtection
    *
    * @param bool $operationProtection 是否开启操作保护，开启为\"true\"，未开启为\"false\"。
    *
    * @return $this
    */
    public function setOperationProtection($operationProtection)
    {
        $this->container['operationProtection'] = $operationProtection;
        return $this;
    }

    /**
    * Gets allowUser
    *  allowUser
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\AllowUserBody|null
    */
    public function getAllowUser()
    {
        return $this->container['allowUser'];
    }

    /**
    * Sets allowUser
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\AllowUserBody|null $allowUser allowUser
    *
    * @return $this
    */
    public function setAllowUser($allowUser)
    {
        $this->container['allowUser'] = $allowUser;
        return $this;
    }

    /**
    * Gets mobile
    *  操作保护验证指定手机号码。示例：0086-123456789。
    *
    * @return string|null
    */
    public function getMobile()
    {
        return $this->container['mobile'];
    }

    /**
    * Sets mobile
    *
    * @param string|null $mobile 操作保护验证指定手机号码。示例：0086-123456789。
    *
    * @return $this
    */
    public function setMobile($mobile)
    {
        $this->container['mobile'] = $mobile;
        return $this;
    }

    /**
    * Gets adminCheck
    *  是否指定人员验证。on为指定人员验证，必须填写scene参数。off为操作员验证。
    *
    * @return string|null
    */
    public function getAdminCheck()
    {
        return $this->container['adminCheck'];
    }

    /**
    * Sets adminCheck
    *
    * @param string|null $adminCheck 是否指定人员验证。on为指定人员验证，必须填写scene参数。off为操作员验证。
    *
    * @return $this
    */
    public function setAdminCheck($adminCheck)
    {
        $this->container['adminCheck'] = $adminCheck;
        return $this;
    }

    /**
    * Gets email
    *  操作保护验证指定邮件地址。示例：example@email.com。
    *
    * @return string|null
    */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
    * Sets email
    *
    * @param string|null $email 操作保护验证指定邮件地址。示例：example@email.com。
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets scene
    *  操作保护指定人员验证方式，admin_check为on时，必须填写。包括mobile、email。
    *
    * @return string|null
    */
    public function getScene()
    {
        return $this->container['scene'];
    }

    /**
    * Sets scene
    *
    * @param string|null $scene 操作保护指定人员验证方式，admin_check为on时，必须填写。包括mobile、email。
    *
    * @return $this
    */
    public function setScene($scene)
    {
        $this->container['scene'] = $scene;
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

