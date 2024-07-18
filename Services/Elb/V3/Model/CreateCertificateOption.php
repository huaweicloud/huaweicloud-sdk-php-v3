<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCertificateOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCertificateOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * adminStateUp  证书的管理状态。  不支持该字段，请勿使用。
    * certificate  HTTPS协议使用的证书内容。 取值范围：PEM编码格式。 最大长度65536字符。 支持证书链，最大11层(含证书和证书链)。
    * description  证书的描述。
    * domain  服务器证书所签域名。该字段仅type为server时有效。  总长度为0-10000，由若干普通域名或泛域名组成，域名之间以\",\"分割，不超过100个域名。  普通域名：由若干字符串组成，字符串间以\".\"分割，单个字符串长度不超过63个字符， 只能包含英文字母、数字或\"-\"，且必须以字母或数字开头和结尾。例：www.test.com；  泛域名：在普通域名的基础上仅允许首字母为\"\\*\"。例：\\*.test.com
    * name  证书的名称。
    * privateKey  HTTPS协议使用的私钥。当type为server时有效且必选。当type为client时，可以传或也可以不传，但都会被忽略；若传入则必须符合PEM格式。 取值范围：PEM编码格式。 最大长度8192字符。
    * projectId  证书所在的项目ID。
    * type  SSL证书的类型。分为服务器证书(server)、CA证书(client)。 默认值：server
    * enterpriseProjectId  证书所属的企业项目ID。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * encCertificate  HTTPS协议使用的SM加密证书内容。支持证书链，最大11层(含证书和证书链)。  取值：PEM编码格式。最大长度65536字符。  使用说明：仅type为server_sm时有效且必选。
    * encPrivateKey  HTTPS协议使用的SM加密证书私钥。  取值：PEM编码格式。最大长度8192字符。  使用说明：仅type为server_sm时有效且必选。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'adminStateUp' => 'bool',
            'certificate' => 'string',
            'description' => 'string',
            'domain' => 'string',
            'name' => 'string',
            'privateKey' => 'string',
            'projectId' => 'string',
            'type' => 'string',
            'enterpriseProjectId' => 'string',
            'encCertificate' => 'string',
            'encPrivateKey' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * adminStateUp  证书的管理状态。  不支持该字段，请勿使用。
    * certificate  HTTPS协议使用的证书内容。 取值范围：PEM编码格式。 最大长度65536字符。 支持证书链，最大11层(含证书和证书链)。
    * description  证书的描述。
    * domain  服务器证书所签域名。该字段仅type为server时有效。  总长度为0-10000，由若干普通域名或泛域名组成，域名之间以\",\"分割，不超过100个域名。  普通域名：由若干字符串组成，字符串间以\".\"分割，单个字符串长度不超过63个字符， 只能包含英文字母、数字或\"-\"，且必须以字母或数字开头和结尾。例：www.test.com；  泛域名：在普通域名的基础上仅允许首字母为\"\\*\"。例：\\*.test.com
    * name  证书的名称。
    * privateKey  HTTPS协议使用的私钥。当type为server时有效且必选。当type为client时，可以传或也可以不传，但都会被忽略；若传入则必须符合PEM格式。 取值范围：PEM编码格式。 最大长度8192字符。
    * projectId  证书所在的项目ID。
    * type  SSL证书的类型。分为服务器证书(server)、CA证书(client)。 默认值：server
    * enterpriseProjectId  证书所属的企业项目ID。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * encCertificate  HTTPS协议使用的SM加密证书内容。支持证书链，最大11层(含证书和证书链)。  取值：PEM编码格式。最大长度65536字符。  使用说明：仅type为server_sm时有效且必选。
    * encPrivateKey  HTTPS协议使用的SM加密证书私钥。  取值：PEM编码格式。最大长度8192字符。  使用说明：仅type为server_sm时有效且必选。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'adminStateUp' => null,
        'certificate' => null,
        'description' => null,
        'domain' => null,
        'name' => null,
        'privateKey' => null,
        'projectId' => null,
        'type' => null,
        'enterpriseProjectId' => null,
        'encCertificate' => null,
        'encPrivateKey' => null
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
    * adminStateUp  证书的管理状态。  不支持该字段，请勿使用。
    * certificate  HTTPS协议使用的证书内容。 取值范围：PEM编码格式。 最大长度65536字符。 支持证书链，最大11层(含证书和证书链)。
    * description  证书的描述。
    * domain  服务器证书所签域名。该字段仅type为server时有效。  总长度为0-10000，由若干普通域名或泛域名组成，域名之间以\",\"分割，不超过100个域名。  普通域名：由若干字符串组成，字符串间以\".\"分割，单个字符串长度不超过63个字符， 只能包含英文字母、数字或\"-\"，且必须以字母或数字开头和结尾。例：www.test.com；  泛域名：在普通域名的基础上仅允许首字母为\"\\*\"。例：\\*.test.com
    * name  证书的名称。
    * privateKey  HTTPS协议使用的私钥。当type为server时有效且必选。当type为client时，可以传或也可以不传，但都会被忽略；若传入则必须符合PEM格式。 取值范围：PEM编码格式。 最大长度8192字符。
    * projectId  证书所在的项目ID。
    * type  SSL证书的类型。分为服务器证书(server)、CA证书(client)。 默认值：server
    * enterpriseProjectId  证书所属的企业项目ID。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * encCertificate  HTTPS协议使用的SM加密证书内容。支持证书链，最大11层(含证书和证书链)。  取值：PEM编码格式。最大长度65536字符。  使用说明：仅type为server_sm时有效且必选。
    * encPrivateKey  HTTPS协议使用的SM加密证书私钥。  取值：PEM编码格式。最大长度8192字符。  使用说明：仅type为server_sm时有效且必选。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'adminStateUp' => 'admin_state_up',
            'certificate' => 'certificate',
            'description' => 'description',
            'domain' => 'domain',
            'name' => 'name',
            'privateKey' => 'private_key',
            'projectId' => 'project_id',
            'type' => 'type',
            'enterpriseProjectId' => 'enterprise_project_id',
            'encCertificate' => 'enc_certificate',
            'encPrivateKey' => 'enc_private_key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * adminStateUp  证书的管理状态。  不支持该字段，请勿使用。
    * certificate  HTTPS协议使用的证书内容。 取值范围：PEM编码格式。 最大长度65536字符。 支持证书链，最大11层(含证书和证书链)。
    * description  证书的描述。
    * domain  服务器证书所签域名。该字段仅type为server时有效。  总长度为0-10000，由若干普通域名或泛域名组成，域名之间以\",\"分割，不超过100个域名。  普通域名：由若干字符串组成，字符串间以\".\"分割，单个字符串长度不超过63个字符， 只能包含英文字母、数字或\"-\"，且必须以字母或数字开头和结尾。例：www.test.com；  泛域名：在普通域名的基础上仅允许首字母为\"\\*\"。例：\\*.test.com
    * name  证书的名称。
    * privateKey  HTTPS协议使用的私钥。当type为server时有效且必选。当type为client时，可以传或也可以不传，但都会被忽略；若传入则必须符合PEM格式。 取值范围：PEM编码格式。 最大长度8192字符。
    * projectId  证书所在的项目ID。
    * type  SSL证书的类型。分为服务器证书(server)、CA证书(client)。 默认值：server
    * enterpriseProjectId  证书所属的企业项目ID。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * encCertificate  HTTPS协议使用的SM加密证书内容。支持证书链，最大11层(含证书和证书链)。  取值：PEM编码格式。最大长度65536字符。  使用说明：仅type为server_sm时有效且必选。
    * encPrivateKey  HTTPS协议使用的SM加密证书私钥。  取值：PEM编码格式。最大长度8192字符。  使用说明：仅type为server_sm时有效且必选。
    *
    * @var string[]
    */
    protected static $setters = [
            'adminStateUp' => 'setAdminStateUp',
            'certificate' => 'setCertificate',
            'description' => 'setDescription',
            'domain' => 'setDomain',
            'name' => 'setName',
            'privateKey' => 'setPrivateKey',
            'projectId' => 'setProjectId',
            'type' => 'setType',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'encCertificate' => 'setEncCertificate',
            'encPrivateKey' => 'setEncPrivateKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * adminStateUp  证书的管理状态。  不支持该字段，请勿使用。
    * certificate  HTTPS协议使用的证书内容。 取值范围：PEM编码格式。 最大长度65536字符。 支持证书链，最大11层(含证书和证书链)。
    * description  证书的描述。
    * domain  服务器证书所签域名。该字段仅type为server时有效。  总长度为0-10000，由若干普通域名或泛域名组成，域名之间以\",\"分割，不超过100个域名。  普通域名：由若干字符串组成，字符串间以\".\"分割，单个字符串长度不超过63个字符， 只能包含英文字母、数字或\"-\"，且必须以字母或数字开头和结尾。例：www.test.com；  泛域名：在普通域名的基础上仅允许首字母为\"\\*\"。例：\\*.test.com
    * name  证书的名称。
    * privateKey  HTTPS协议使用的私钥。当type为server时有效且必选。当type为client时，可以传或也可以不传，但都会被忽略；若传入则必须符合PEM格式。 取值范围：PEM编码格式。 最大长度8192字符。
    * projectId  证书所在的项目ID。
    * type  SSL证书的类型。分为服务器证书(server)、CA证书(client)。 默认值：server
    * enterpriseProjectId  证书所属的企业项目ID。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * encCertificate  HTTPS协议使用的SM加密证书内容。支持证书链，最大11层(含证书和证书链)。  取值：PEM编码格式。最大长度65536字符。  使用说明：仅type为server_sm时有效且必选。
    * encPrivateKey  HTTPS协议使用的SM加密证书私钥。  取值：PEM编码格式。最大长度8192字符。  使用说明：仅type为server_sm时有效且必选。
    *
    * @var string[]
    */
    protected static $getters = [
            'adminStateUp' => 'getAdminStateUp',
            'certificate' => 'getCertificate',
            'description' => 'getDescription',
            'domain' => 'getDomain',
            'name' => 'getName',
            'privateKey' => 'getPrivateKey',
            'projectId' => 'getProjectId',
            'type' => 'getType',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'encCertificate' => 'getEncCertificate',
            'encPrivateKey' => 'getEncPrivateKey'
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
    const TYPE_SERVER = 'server';
    const TYPE_CLIENT = 'client';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SERVER,
            self::TYPE_CLIENT,
        ];
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
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['privateKey'] = isset($data['privateKey']) ? $data['privateKey'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['encCertificate'] = isset($data['encCertificate']) ? $data['encCertificate'] : null;
        $this->container['encPrivateKey'] = isset($data['encPrivateKey']) ? $data['encPrivateKey'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) > 10000)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) < 0)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && !preg_match("/[0-9a-fA-F]{32}/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /[0-9a-fA-F]{32}/.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets certificate
    *  HTTPS协议使用的证书内容。 取值范围：PEM编码格式。 最大长度65536字符。 支持证书链，最大11层(含证书和证书链)。
    *
    * @return string|null
    */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
    * Sets certificate
    *
    * @param string|null $certificate HTTPS协议使用的证书内容。 取值范围：PEM编码格式。 最大长度65536字符。 支持证书链，最大11层(含证书和证书链)。
    *
    * @return $this
    */
    public function setCertificate($certificate)
    {
        $this->container['certificate'] = $certificate;
        return $this;
    }

    /**
    * Gets description
    *  证书的描述。
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
    * @param string|null $description 证书的描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets domain
    *  服务器证书所签域名。该字段仅type为server时有效。  总长度为0-10000，由若干普通域名或泛域名组成，域名之间以\",\"分割，不超过100个域名。  普通域名：由若干字符串组成，字符串间以\".\"分割，单个字符串长度不超过63个字符， 只能包含英文字母、数字或\"-\"，且必须以字母或数字开头和结尾。例：www.test.com；  泛域名：在普通域名的基础上仅允许首字母为\"\\*\"。例：\\*.test.com
    *
    * @return string|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string|null $domain 服务器证书所签域名。该字段仅type为server时有效。  总长度为0-10000，由若干普通域名或泛域名组成，域名之间以\",\"分割，不超过100个域名。  普通域名：由若干字符串组成，字符串间以\".\"分割，单个字符串长度不超过63个字符， 只能包含英文字母、数字或\"-\"，且必须以字母或数字开头和结尾。例：www.test.com；  泛域名：在普通域名的基础上仅允许首字母为\"\\*\"。例：\\*.test.com
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets name
    *  证书的名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 证书的名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets privateKey
    *  HTTPS协议使用的私钥。当type为server时有效且必选。当type为client时，可以传或也可以不传，但都会被忽略；若传入则必须符合PEM格式。 取值范围：PEM编码格式。 最大长度8192字符。
    *
    * @return string|null
    */
    public function getPrivateKey()
    {
        return $this->container['privateKey'];
    }

    /**
    * Sets privateKey
    *
    * @param string|null $privateKey HTTPS协议使用的私钥。当type为server时有效且必选。当type为client时，可以传或也可以不传，但都会被忽略；若传入则必须符合PEM格式。 取值范围：PEM编码格式。 最大长度8192字符。
    *
    * @return $this
    */
    public function setPrivateKey($privateKey)
    {
        $this->container['privateKey'] = $privateKey;
        return $this;
    }

    /**
    * Gets projectId
    *  证书所在的项目ID。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 证书所在的项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets type
    *  SSL证书的类型。分为服务器证书(server)、CA证书(client)。 默认值：server
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type SSL证书的类型。分为服务器证书(server)、CA证书(client)。 默认值：server
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  证书所属的企业项目ID。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 证书所属的企业项目ID。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets encCertificate
    *  HTTPS协议使用的SM加密证书内容。支持证书链，最大11层(含证书和证书链)。  取值：PEM编码格式。最大长度65536字符。  使用说明：仅type为server_sm时有效且必选。
    *
    * @return string|null
    */
    public function getEncCertificate()
    {
        return $this->container['encCertificate'];
    }

    /**
    * Sets encCertificate
    *
    * @param string|null $encCertificate HTTPS协议使用的SM加密证书内容。支持证书链，最大11层(含证书和证书链)。  取值：PEM编码格式。最大长度65536字符。  使用说明：仅type为server_sm时有效且必选。
    *
    * @return $this
    */
    public function setEncCertificate($encCertificate)
    {
        $this->container['encCertificate'] = $encCertificate;
        return $this;
    }

    /**
    * Gets encPrivateKey
    *  HTTPS协议使用的SM加密证书私钥。  取值：PEM编码格式。最大长度8192字符。  使用说明：仅type为server_sm时有效且必选。
    *
    * @return string|null
    */
    public function getEncPrivateKey()
    {
        return $this->container['encPrivateKey'];
    }

    /**
    * Sets encPrivateKey
    *
    * @param string|null $encPrivateKey HTTPS协议使用的SM加密证书私钥。  取值：PEM编码格式。最大长度8192字符。  使用说明：仅type为server_sm时有效且必选。
    *
    * @return $this
    */
    public function setEncPrivateKey($encPrivateKey)
    {
        $this->container['encPrivateKey'] = $encPrivateKey;
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

