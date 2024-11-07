<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FindingDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FindingDetails';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * externalAccessDetails  externalAccessDetails
    * unusedIamUserAccessKeyDetails  unusedIamUserAccessKeyDetails
    * unusedIamUserPasswordDetails  unusedIamUserPasswordDetails
    * unusedPermissionDetails  unusedPermissionDetails
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'externalAccessDetails' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ExternalAccessDetails',
            'unusedIamUserAccessKeyDetails' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UnusedIamUserAccessKeyDetails',
            'unusedIamUserPasswordDetails' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UnusedIamUserPasswordDetails',
            'unusedPermissionDetails' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UnusedPermissionDetails'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * externalAccessDetails  externalAccessDetails
    * unusedIamUserAccessKeyDetails  unusedIamUserAccessKeyDetails
    * unusedIamUserPasswordDetails  unusedIamUserPasswordDetails
    * unusedPermissionDetails  unusedPermissionDetails
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'externalAccessDetails' => null,
        'unusedIamUserAccessKeyDetails' => null,
        'unusedIamUserPasswordDetails' => null,
        'unusedPermissionDetails' => null
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
    * externalAccessDetails  externalAccessDetails
    * unusedIamUserAccessKeyDetails  unusedIamUserAccessKeyDetails
    * unusedIamUserPasswordDetails  unusedIamUserPasswordDetails
    * unusedPermissionDetails  unusedPermissionDetails
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'externalAccessDetails' => 'external_access_details',
            'unusedIamUserAccessKeyDetails' => 'unused_iam_user_access_key_details',
            'unusedIamUserPasswordDetails' => 'unused_iam_user_password_details',
            'unusedPermissionDetails' => 'unused_permission_details'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * externalAccessDetails  externalAccessDetails
    * unusedIamUserAccessKeyDetails  unusedIamUserAccessKeyDetails
    * unusedIamUserPasswordDetails  unusedIamUserPasswordDetails
    * unusedPermissionDetails  unusedPermissionDetails
    *
    * @var string[]
    */
    protected static $setters = [
            'externalAccessDetails' => 'setExternalAccessDetails',
            'unusedIamUserAccessKeyDetails' => 'setUnusedIamUserAccessKeyDetails',
            'unusedIamUserPasswordDetails' => 'setUnusedIamUserPasswordDetails',
            'unusedPermissionDetails' => 'setUnusedPermissionDetails'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * externalAccessDetails  externalAccessDetails
    * unusedIamUserAccessKeyDetails  unusedIamUserAccessKeyDetails
    * unusedIamUserPasswordDetails  unusedIamUserPasswordDetails
    * unusedPermissionDetails  unusedPermissionDetails
    *
    * @var string[]
    */
    protected static $getters = [
            'externalAccessDetails' => 'getExternalAccessDetails',
            'unusedIamUserAccessKeyDetails' => 'getUnusedIamUserAccessKeyDetails',
            'unusedIamUserPasswordDetails' => 'getUnusedIamUserPasswordDetails',
            'unusedPermissionDetails' => 'getUnusedPermissionDetails'
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
        $this->container['externalAccessDetails'] = isset($data['externalAccessDetails']) ? $data['externalAccessDetails'] : null;
        $this->container['unusedIamUserAccessKeyDetails'] = isset($data['unusedIamUserAccessKeyDetails']) ? $data['unusedIamUserAccessKeyDetails'] : null;
        $this->container['unusedIamUserPasswordDetails'] = isset($data['unusedIamUserPasswordDetails']) ? $data['unusedIamUserPasswordDetails'] : null;
        $this->container['unusedPermissionDetails'] = isset($data['unusedPermissionDetails']) ? $data['unusedPermissionDetails'] : null;
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
    * Gets externalAccessDetails
    *  externalAccessDetails
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ExternalAccessDetails|null
    */
    public function getExternalAccessDetails()
    {
        return $this->container['externalAccessDetails'];
    }

    /**
    * Sets externalAccessDetails
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ExternalAccessDetails|null $externalAccessDetails externalAccessDetails
    *
    * @return $this
    */
    public function setExternalAccessDetails($externalAccessDetails)
    {
        $this->container['externalAccessDetails'] = $externalAccessDetails;
        return $this;
    }

    /**
    * Gets unusedIamUserAccessKeyDetails
    *  unusedIamUserAccessKeyDetails
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UnusedIamUserAccessKeyDetails|null
    */
    public function getUnusedIamUserAccessKeyDetails()
    {
        return $this->container['unusedIamUserAccessKeyDetails'];
    }

    /**
    * Sets unusedIamUserAccessKeyDetails
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UnusedIamUserAccessKeyDetails|null $unusedIamUserAccessKeyDetails unusedIamUserAccessKeyDetails
    *
    * @return $this
    */
    public function setUnusedIamUserAccessKeyDetails($unusedIamUserAccessKeyDetails)
    {
        $this->container['unusedIamUserAccessKeyDetails'] = $unusedIamUserAccessKeyDetails;
        return $this;
    }

    /**
    * Gets unusedIamUserPasswordDetails
    *  unusedIamUserPasswordDetails
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UnusedIamUserPasswordDetails|null
    */
    public function getUnusedIamUserPasswordDetails()
    {
        return $this->container['unusedIamUserPasswordDetails'];
    }

    /**
    * Sets unusedIamUserPasswordDetails
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UnusedIamUserPasswordDetails|null $unusedIamUserPasswordDetails unusedIamUserPasswordDetails
    *
    * @return $this
    */
    public function setUnusedIamUserPasswordDetails($unusedIamUserPasswordDetails)
    {
        $this->container['unusedIamUserPasswordDetails'] = $unusedIamUserPasswordDetails;
        return $this;
    }

    /**
    * Gets unusedPermissionDetails
    *  unusedPermissionDetails
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UnusedPermissionDetails|null
    */
    public function getUnusedPermissionDetails()
    {
        return $this->container['unusedPermissionDetails'];
    }

    /**
    * Sets unusedPermissionDetails
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UnusedPermissionDetails|null $unusedPermissionDetails unusedPermissionDetails
    *
    * @return $this
    */
    public function setUnusedPermissionDetails($unusedPermissionDetails)
    {
        $this->container['unusedPermissionDetails'] = $unusedPermissionDetails;
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

