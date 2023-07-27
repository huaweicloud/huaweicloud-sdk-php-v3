<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCertificatesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCertificatesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * limit  每页返回的个数。
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    * id  证书ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * name  证书的名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    * description  证书的描述。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
    * adminStateUp  证书的管理状态。  不支持该字段，请勿使用。
    * domain  服务器证书所签域名。该字段仅type为server时有效。  支持多值查询，查询条件格式：domain=xxx&domain=xxx。
    * type  证书的类型。分为服务器证书(server)和CA证书(client)。  支持多值查询，查询条件格式：type=xxx&type=xxx。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'marker' => 'string',
            'limit' => 'int',
            'pageReverse' => 'bool',
            'id' => 'string[]',
            'name' => 'string[]',
            'description' => 'string[]',
            'adminStateUp' => 'bool',
            'domain' => 'string[]',
            'type' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * limit  每页返回的个数。
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    * id  证书ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * name  证书的名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    * description  证书的描述。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
    * adminStateUp  证书的管理状态。  不支持该字段，请勿使用。
    * domain  服务器证书所签域名。该字段仅type为server时有效。  支持多值查询，查询条件格式：domain=xxx&domain=xxx。
    * type  证书的类型。分为服务器证书(server)和CA证书(client)。  支持多值查询，查询条件格式：type=xxx&type=xxx。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'marker' => null,
        'limit' => 'int32',
        'pageReverse' => null,
        'id' => null,
        'name' => null,
        'description' => null,
        'adminStateUp' => null,
        'domain' => null,
        'type' => null
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
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * limit  每页返回的个数。
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    * id  证书ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * name  证书的名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    * description  证书的描述。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
    * adminStateUp  证书的管理状态。  不支持该字段，请勿使用。
    * domain  服务器证书所签域名。该字段仅type为server时有效。  支持多值查询，查询条件格式：domain=xxx&domain=xxx。
    * type  证书的类型。分为服务器证书(server)和CA证书(client)。  支持多值查询，查询条件格式：type=xxx&type=xxx。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'marker' => 'marker',
            'limit' => 'limit',
            'pageReverse' => 'page_reverse',
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'adminStateUp' => 'admin_state_up',
            'domain' => 'domain',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * limit  每页返回的个数。
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    * id  证书ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * name  证书的名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    * description  证书的描述。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
    * adminStateUp  证书的管理状态。  不支持该字段，请勿使用。
    * domain  服务器证书所签域名。该字段仅type为server时有效。  支持多值查询，查询条件格式：domain=xxx&domain=xxx。
    * type  证书的类型。分为服务器证书(server)和CA证书(client)。  支持多值查询，查询条件格式：type=xxx&type=xxx。
    *
    * @var string[]
    */
    protected static $setters = [
            'marker' => 'setMarker',
            'limit' => 'setLimit',
            'pageReverse' => 'setPageReverse',
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'adminStateUp' => 'setAdminStateUp',
            'domain' => 'setDomain',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * limit  每页返回的个数。
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    * id  证书ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * name  证书的名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    * description  证书的描述。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
    * adminStateUp  证书的管理状态。  不支持该字段，请勿使用。
    * domain  服务器证书所签域名。该字段仅type为server时有效。  支持多值查询，查询条件格式：domain=xxx&domain=xxx。
    * type  证书的类型。分为服务器证书(server)和CA证书(client)。  支持多值查询，查询条件格式：type=xxx&type=xxx。
    *
    * @var string[]
    */
    protected static $getters = [
            'marker' => 'getMarker',
            'limit' => 'getLimit',
            'pageReverse' => 'getPageReverse',
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'adminStateUp' => 'getAdminStateUp',
            'domain' => 'getDomain',
            'type' => 'getType'
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
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 2000;
        $this->container['pageReverse'] = isset($data['pageReverse']) ? $data['pageReverse'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
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
    * Gets marker
    *  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets limit
    *  每页返回的个数。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页返回的个数。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets pageReverse
    *  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    *
    * @return bool|null
    */
    public function getPageReverse()
    {
        return $this->container['pageReverse'];
    }

    /**
    * Sets pageReverse
    *
    * @param bool|null $pageReverse 是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    *
    * @return $this
    */
    public function setPageReverse($pageReverse)
    {
        $this->container['pageReverse'] = $pageReverse;
        return $this;
    }

    /**
    * Gets id
    *  证书ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    *
    * @return string[]|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string[]|null $id 证书ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  证书的名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    *
    * @return string[]|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string[]|null $name 证书的名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  证书的描述。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
    *
    * @return string[]|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string[]|null $description 证书的描述。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  证书的管理状态。  不支持该字段，请勿使用。
    *
    * @return bool|null
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool|null $adminStateUp 证书的管理状态。  不支持该字段，请勿使用。
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets domain
    *  服务器证书所签域名。该字段仅type为server时有效。  支持多值查询，查询条件格式：domain=xxx&domain=xxx。
    *
    * @return string[]|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string[]|null $domain 服务器证书所签域名。该字段仅type为server时有效。  支持多值查询，查询条件格式：domain=xxx&domain=xxx。
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets type
    *  证书的类型。分为服务器证书(server)和CA证书(client)。  支持多值查询，查询条件格式：type=xxx&type=xxx。
    *
    * @return string[]|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string[]|null $type 证书的类型。分为服务器证书(server)和CA证书(client)。  支持多值查询，查询条件格式：type=xxx&type=xxx。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

