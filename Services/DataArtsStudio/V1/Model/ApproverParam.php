<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApproverParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApproverParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * approverName  审批人姓名
    * userId  审批人user_id
    * email  email
    * phoneNumber  电话号码
    * emailNotify  邮件通知
    * smsNotify  短信通知
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'approverName' => 'string',
            'userId' => 'string',
            'email' => 'string',
            'phoneNumber' => 'string',
            'emailNotify' => 'bool',
            'smsNotify' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * approverName  审批人姓名
    * userId  审批人user_id
    * email  email
    * phoneNumber  电话号码
    * emailNotify  邮件通知
    * smsNotify  短信通知
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'approverName' => null,
        'userId' => null,
        'email' => null,
        'phoneNumber' => null,
        'emailNotify' => null,
        'smsNotify' => null
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
    * approverName  审批人姓名
    * userId  审批人user_id
    * email  email
    * phoneNumber  电话号码
    * emailNotify  邮件通知
    * smsNotify  短信通知
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'approverName' => 'approver_name',
            'userId' => 'user_id',
            'email' => 'email',
            'phoneNumber' => 'phone_number',
            'emailNotify' => 'email_notify',
            'smsNotify' => 'sms_notify'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * approverName  审批人姓名
    * userId  审批人user_id
    * email  email
    * phoneNumber  电话号码
    * emailNotify  邮件通知
    * smsNotify  短信通知
    *
    * @var string[]
    */
    protected static $setters = [
            'approverName' => 'setApproverName',
            'userId' => 'setUserId',
            'email' => 'setEmail',
            'phoneNumber' => 'setPhoneNumber',
            'emailNotify' => 'setEmailNotify',
            'smsNotify' => 'setSmsNotify'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * approverName  审批人姓名
    * userId  审批人user_id
    * email  email
    * phoneNumber  电话号码
    * emailNotify  邮件通知
    * smsNotify  短信通知
    *
    * @var string[]
    */
    protected static $getters = [
            'approverName' => 'getApproverName',
            'userId' => 'getUserId',
            'email' => 'getEmail',
            'phoneNumber' => 'getPhoneNumber',
            'emailNotify' => 'getEmailNotify',
            'smsNotify' => 'getSmsNotify'
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
        $this->container['approverName'] = isset($data['approverName']) ? $data['approverName'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phoneNumber'] = isset($data['phoneNumber']) ? $data['phoneNumber'] : null;
        $this->container['emailNotify'] = isset($data['emailNotify']) ? $data['emailNotify'] : null;
        $this->container['smsNotify'] = isset($data['smsNotify']) ? $data['smsNotify'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['approverName'] === null) {
            $invalidProperties[] = "'approverName' can't be null";
        }
            if ((mb_strlen($this->container['approverName']) > 100)) {
                $invalidProperties[] = "invalid value for 'approverName', the character length must be smaller than or equal to 100.";
            }
        if ($this->container['userId'] === null) {
            $invalidProperties[] = "'userId' can't be null";
        }
            if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 500)) {
                $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['email']) && !preg_match("/^\\w+([-+.]\\w+)*@\\w+([-.]\\w+)*\\.\\w+([-.]\\w+)*$/", $this->container['email'])) {
                $invalidProperties[] = "invalid value for 'email', must be conform to the pattern /^\\w+([-+.]\\w+)*@\\w+([-.]\\w+)*\\.\\w+([-.]\\w+)*$/.";
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
    * Gets approverName
    *  审批人姓名
    *
    * @return string
    */
    public function getApproverName()
    {
        return $this->container['approverName'];
    }

    /**
    * Sets approverName
    *
    * @param string $approverName 审批人姓名
    *
    * @return $this
    */
    public function setApproverName($approverName)
    {
        $this->container['approverName'] = $approverName;
        return $this;
    }

    /**
    * Gets userId
    *  审批人user_id
    *
    * @return string
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string $userId 审批人user_id
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets email
    *  email
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
    * @param string|null $email email
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets phoneNumber
    *  电话号码
    *
    * @return string|null
    */
    public function getPhoneNumber()
    {
        return $this->container['phoneNumber'];
    }

    /**
    * Sets phoneNumber
    *
    * @param string|null $phoneNumber 电话号码
    *
    * @return $this
    */
    public function setPhoneNumber($phoneNumber)
    {
        $this->container['phoneNumber'] = $phoneNumber;
        return $this;
    }

    /**
    * Gets emailNotify
    *  邮件通知
    *
    * @return bool|null
    */
    public function getEmailNotify()
    {
        return $this->container['emailNotify'];
    }

    /**
    * Sets emailNotify
    *
    * @param bool|null $emailNotify 邮件通知
    *
    * @return $this
    */
    public function setEmailNotify($emailNotify)
    {
        $this->container['emailNotify'] = $emailNotify;
        return $this;
    }

    /**
    * Gets smsNotify
    *  短信通知
    *
    * @return bool|null
    */
    public function getSmsNotify()
    {
        return $this->container['smsNotify'];
    }

    /**
    * Sets smsNotify
    *
    * @param bool|null $smsNotify 短信通知
    *
    * @return $this
    */
    public function setSmsNotify($smsNotify)
    {
        $this->container['smsNotify'] = $smsNotify;
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

