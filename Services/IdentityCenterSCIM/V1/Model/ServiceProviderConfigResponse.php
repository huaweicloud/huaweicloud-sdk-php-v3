<?php

namespace HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServiceProviderConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServiceProviderConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * schemas  概要
    * documentationUri  帮助文档链接
    * authenticationSchemes  认证概要列表
    * patch  patch
    * bulk  bulk
    * filter  filter
    * changePassword  changePassword
    * sort  sort
    * etag  etag
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'schemas' => 'string[]',
            'documentationUri' => 'string',
            'authenticationSchemes' => '\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\AuthenticationSchemeItemDto[]',
            'patch' => '\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\PatchDto',
            'bulk' => '\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\BulkDto',
            'filter' => '\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\FilterDto',
            'changePassword' => '\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\ChangePasswordDto',
            'sort' => '\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\SortDto',
            'etag' => '\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\EtagDto'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * schemas  概要
    * documentationUri  帮助文档链接
    * authenticationSchemes  认证概要列表
    * patch  patch
    * bulk  bulk
    * filter  filter
    * changePassword  changePassword
    * sort  sort
    * etag  etag
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'schemas' => null,
        'documentationUri' => null,
        'authenticationSchemes' => null,
        'patch' => null,
        'bulk' => null,
        'filter' => null,
        'changePassword' => null,
        'sort' => null,
        'etag' => null
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
    * schemas  概要
    * documentationUri  帮助文档链接
    * authenticationSchemes  认证概要列表
    * patch  patch
    * bulk  bulk
    * filter  filter
    * changePassword  changePassword
    * sort  sort
    * etag  etag
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'schemas' => 'schemas',
            'documentationUri' => 'documentationUri',
            'authenticationSchemes' => 'authenticationSchemes',
            'patch' => 'patch',
            'bulk' => 'bulk',
            'filter' => 'filter',
            'changePassword' => 'changePassword',
            'sort' => 'sort',
            'etag' => 'etag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * schemas  概要
    * documentationUri  帮助文档链接
    * authenticationSchemes  认证概要列表
    * patch  patch
    * bulk  bulk
    * filter  filter
    * changePassword  changePassword
    * sort  sort
    * etag  etag
    *
    * @var string[]
    */
    protected static $setters = [
            'schemas' => 'setSchemas',
            'documentationUri' => 'setDocumentationUri',
            'authenticationSchemes' => 'setAuthenticationSchemes',
            'patch' => 'setPatch',
            'bulk' => 'setBulk',
            'filter' => 'setFilter',
            'changePassword' => 'setChangePassword',
            'sort' => 'setSort',
            'etag' => 'setEtag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * schemas  概要
    * documentationUri  帮助文档链接
    * authenticationSchemes  认证概要列表
    * patch  patch
    * bulk  bulk
    * filter  filter
    * changePassword  changePassword
    * sort  sort
    * etag  etag
    *
    * @var string[]
    */
    protected static $getters = [
            'schemas' => 'getSchemas',
            'documentationUri' => 'getDocumentationUri',
            'authenticationSchemes' => 'getAuthenticationSchemes',
            'patch' => 'getPatch',
            'bulk' => 'getBulk',
            'filter' => 'getFilter',
            'changePassword' => 'getChangePassword',
            'sort' => 'getSort',
            'etag' => 'getEtag'
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
        $this->container['schemas'] = isset($data['schemas']) ? $data['schemas'] : null;
        $this->container['documentationUri'] = isset($data['documentationUri']) ? $data['documentationUri'] : null;
        $this->container['authenticationSchemes'] = isset($data['authenticationSchemes']) ? $data['authenticationSchemes'] : null;
        $this->container['patch'] = isset($data['patch']) ? $data['patch'] : null;
        $this->container['bulk'] = isset($data['bulk']) ? $data['bulk'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['changePassword'] = isset($data['changePassword']) ? $data['changePassword'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['etag'] = isset($data['etag']) ? $data['etag'] : null;
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
    * Gets schemas
    *  概要
    *
    * @return string[]|null
    */
    public function getSchemas()
    {
        return $this->container['schemas'];
    }

    /**
    * Sets schemas
    *
    * @param string[]|null $schemas 概要
    *
    * @return $this
    */
    public function setSchemas($schemas)
    {
        $this->container['schemas'] = $schemas;
        return $this;
    }

    /**
    * Gets documentationUri
    *  帮助文档链接
    *
    * @return string|null
    */
    public function getDocumentationUri()
    {
        return $this->container['documentationUri'];
    }

    /**
    * Sets documentationUri
    *
    * @param string|null $documentationUri 帮助文档链接
    *
    * @return $this
    */
    public function setDocumentationUri($documentationUri)
    {
        $this->container['documentationUri'] = $documentationUri;
        return $this;
    }

    /**
    * Gets authenticationSchemes
    *  认证概要列表
    *
    * @return \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\AuthenticationSchemeItemDto[]|null
    */
    public function getAuthenticationSchemes()
    {
        return $this->container['authenticationSchemes'];
    }

    /**
    * Sets authenticationSchemes
    *
    * @param \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\AuthenticationSchemeItemDto[]|null $authenticationSchemes 认证概要列表
    *
    * @return $this
    */
    public function setAuthenticationSchemes($authenticationSchemes)
    {
        $this->container['authenticationSchemes'] = $authenticationSchemes;
        return $this;
    }

    /**
    * Gets patch
    *  patch
    *
    * @return \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\PatchDto|null
    */
    public function getPatch()
    {
        return $this->container['patch'];
    }

    /**
    * Sets patch
    *
    * @param \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\PatchDto|null $patch patch
    *
    * @return $this
    */
    public function setPatch($patch)
    {
        $this->container['patch'] = $patch;
        return $this;
    }

    /**
    * Gets bulk
    *  bulk
    *
    * @return \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\BulkDto|null
    */
    public function getBulk()
    {
        return $this->container['bulk'];
    }

    /**
    * Sets bulk
    *
    * @param \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\BulkDto|null $bulk bulk
    *
    * @return $this
    */
    public function setBulk($bulk)
    {
        $this->container['bulk'] = $bulk;
        return $this;
    }

    /**
    * Gets filter
    *  filter
    *
    * @return \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\FilterDto|null
    */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
    * Sets filter
    *
    * @param \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\FilterDto|null $filter filter
    *
    * @return $this
    */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;
        return $this;
    }

    /**
    * Gets changePassword
    *  changePassword
    *
    * @return \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\ChangePasswordDto|null
    */
    public function getChangePassword()
    {
        return $this->container['changePassword'];
    }

    /**
    * Sets changePassword
    *
    * @param \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\ChangePasswordDto|null $changePassword changePassword
    *
    * @return $this
    */
    public function setChangePassword($changePassword)
    {
        $this->container['changePassword'] = $changePassword;
        return $this;
    }

    /**
    * Gets sort
    *  sort
    *
    * @return \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\SortDto|null
    */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
    * Sets sort
    *
    * @param \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\SortDto|null $sort sort
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
        return $this;
    }

    /**
    * Gets etag
    *  etag
    *
    * @return \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\EtagDto|null
    */
    public function getEtag()
    {
        return $this->container['etag'];
    }

    /**
    * Sets etag
    *
    * @param \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\EtagDto|null $etag etag
    *
    * @return $this
    */
    public function setEtag($etag)
    {
        $this->container['etag'] = $etag;
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

