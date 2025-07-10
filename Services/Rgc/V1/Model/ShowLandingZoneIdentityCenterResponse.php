<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowLandingZoneIdentityCenterResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowLandingZoneIdentityCenterResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * identityStoreId  Identity Center目录ID。
    * userPortalUrl  Identity Center登录URL。
    * permissionSets  permissionSets
    * groups  groups
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'identityStoreId' => 'string',
            'userPortalUrl' => 'string',
            'permissionSets' => '\HuaweiCloud\SDK\Rgc\V1\Model\PermissionSet[]',
            'groups' => '\HuaweiCloud\SDK\Rgc\V1\Model\IdentityCenterGroup[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * identityStoreId  Identity Center目录ID。
    * userPortalUrl  Identity Center登录URL。
    * permissionSets  permissionSets
    * groups  groups
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'identityStoreId' => null,
        'userPortalUrl' => null,
        'permissionSets' => null,
        'groups' => null
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
    * identityStoreId  Identity Center目录ID。
    * userPortalUrl  Identity Center登录URL。
    * permissionSets  permissionSets
    * groups  groups
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'identityStoreId' => 'identity_store_id',
            'userPortalUrl' => 'user_portal_url',
            'permissionSets' => 'permission_sets',
            'groups' => 'groups'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * identityStoreId  Identity Center目录ID。
    * userPortalUrl  Identity Center登录URL。
    * permissionSets  permissionSets
    * groups  groups
    *
    * @var string[]
    */
    protected static $setters = [
            'identityStoreId' => 'setIdentityStoreId',
            'userPortalUrl' => 'setUserPortalUrl',
            'permissionSets' => 'setPermissionSets',
            'groups' => 'setGroups'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * identityStoreId  Identity Center目录ID。
    * userPortalUrl  Identity Center登录URL。
    * permissionSets  permissionSets
    * groups  groups
    *
    * @var string[]
    */
    protected static $getters = [
            'identityStoreId' => 'getIdentityStoreId',
            'userPortalUrl' => 'getUserPortalUrl',
            'permissionSets' => 'getPermissionSets',
            'groups' => 'getGroups'
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
        $this->container['identityStoreId'] = isset($data['identityStoreId']) ? $data['identityStoreId'] : null;
        $this->container['userPortalUrl'] = isset($data['userPortalUrl']) ? $data['userPortalUrl'] : null;
        $this->container['permissionSets'] = isset($data['permissionSets']) ? $data['permissionSets'] : null;
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['identityStoreId']) && (mb_strlen($this->container['identityStoreId']) > 64)) {
                $invalidProperties[] = "invalid value for 'identityStoreId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['identityStoreId']) && (mb_strlen($this->container['identityStoreId']) < 1)) {
                $invalidProperties[] = "invalid value for 'identityStoreId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userPortalUrl']) && (mb_strlen($this->container['userPortalUrl']) > 64)) {
                $invalidProperties[] = "invalid value for 'userPortalUrl', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['userPortalUrl']) && (mb_strlen($this->container['userPortalUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'userPortalUrl', the character length must be bigger than or equal to 1.";
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
    * Gets identityStoreId
    *  Identity Center目录ID。
    *
    * @return string|null
    */
    public function getIdentityStoreId()
    {
        return $this->container['identityStoreId'];
    }

    /**
    * Sets identityStoreId
    *
    * @param string|null $identityStoreId Identity Center目录ID。
    *
    * @return $this
    */
    public function setIdentityStoreId($identityStoreId)
    {
        $this->container['identityStoreId'] = $identityStoreId;
        return $this;
    }

    /**
    * Gets userPortalUrl
    *  Identity Center登录URL。
    *
    * @return string|null
    */
    public function getUserPortalUrl()
    {
        return $this->container['userPortalUrl'];
    }

    /**
    * Sets userPortalUrl
    *
    * @param string|null $userPortalUrl Identity Center登录URL。
    *
    * @return $this
    */
    public function setUserPortalUrl($userPortalUrl)
    {
        $this->container['userPortalUrl'] = $userPortalUrl;
        return $this;
    }

    /**
    * Gets permissionSets
    *  permissionSets
    *
    * @return \HuaweiCloud\SDK\Rgc\V1\Model\PermissionSet[]|null
    */
    public function getPermissionSets()
    {
        return $this->container['permissionSets'];
    }

    /**
    * Sets permissionSets
    *
    * @param \HuaweiCloud\SDK\Rgc\V1\Model\PermissionSet[]|null $permissionSets permissionSets
    *
    * @return $this
    */
    public function setPermissionSets($permissionSets)
    {
        $this->container['permissionSets'] = $permissionSets;
        return $this;
    }

    /**
    * Gets groups
    *  groups
    *
    * @return \HuaweiCloud\SDK\Rgc\V1\Model\IdentityCenterGroup[]|null
    */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
    * Sets groups
    *
    * @param \HuaweiCloud\SDK\Rgc\V1\Model\IdentityCenterGroup[]|null $groups groups
    *
    * @return $this
    */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;
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

